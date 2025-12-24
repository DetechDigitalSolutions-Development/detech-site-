<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
// Import your models
use App\Models\Blog;
use App\Models\Project;
use App\Models\ProductSite;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Manually generate sitemap using database cursors for performance';

    public function handle()
    {
        $this->info('Starting Sitemap Generation...');

        $sitemap = Sitemap::create();

        // 1. STATIC PAGES
        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        $sitemap->add(Url::create('/contact')->setPriority(0.5));
        $sitemap->add(Url::create('/about')->setPriority(0.5));
        $sitemap->add(Url::create('/services')->setPriority(0.5));
        $sitemap->add(Url::create('/projects')->setPriority(0.9));
        $sitemap->add(Url::create('/blogs')->setPriority(0.9));
        $sitemap->add(Url::create('/careers')->setPriority(0.9));

        // 2. BLOG POSTS (Performance: using cursor)
        $this->info('Adding Blog posts...');
        foreach (Blog::cursor() as $blog) {
            $sitemap->add(
                Url::create(route('blogs.show', $blog->slug))
                    ->setLastModificationDate($blog->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.7)
            );
        }

        // 3. PROJECTS (Performance: using cursor)
        $this->info('Adding Projects...');
        foreach (Project::cursor() as $project) {
            $sitemap->add(
                Url::create(route('projects.show', $project->slug))
                    ->setLastModificationDate($project->updated_at)
                    ->setPriority(0.8)
            );
        }

        // 4. PRODUCT SITES (Only Active)
        $this->info('Adding Product Sites...');
        foreach (ProductSite::where('is_active', true)->cursor() as $site) {
            $sitemap->add(
                Url::create(url($site->site_slug))
                    ->setLastModificationDate($site->updated_at)
                    ->setPriority(0.6)
            );
        }

        // 5. SAVE TO FILE
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap successfully generated at /public/sitemap.xml');
    }
}