<?php

namespace App\Providers;

use App\Models\SiteSetting;
use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductSite;
use App\Models\Project;
use App\Models\Team;
use App\Models\Testimonial;
use App\Observers\BlogObserver;
use App\Observers\ProductObserver;
use App\Observers\ProductSiteObserver;
use App\Observers\ProjectObserver;
use App\Observers\TeamObserver;
use App\Observers\TestimonialObserver;
use App\Observers\SiteSettingObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {   
        ProductSite::observe(ProductSiteObserver::class);
        SiteSetting::observe(SiteSettingObserver::class);
        Blog::observe(BlogObserver::class);
        Product::observe(ProductObserver::class);
        Project::observe(ProjectObserver::class);
        Team::observe(TeamObserver::class);
        Testimonial::observe(TestimonialObserver::class);
    }
}