<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\ProductSite;
use App\Models\Testimonial;
use App\Models\Team;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController;

class PageController extends Controller
{
    /**
     * Display the home page with recent data.
     */
    public function home(): View
    {
        // Fetch the last 4 projects
        $recentProjects = Project::latest()->take(6)->get();

        // Fetch the last 4 testimonials
        $testimonials = Testimonial::get();

        // Fetch the last 4 latest blogs
        $latestBlogs = Blog::latest()->take(3)->get();

        $services = (new ServiceController)->getServicesData()['services'] ?? [];

        return view('pages.home.index', compact('recentProjects', 'testimonials', 'latestBlogs', 'services'));
    }

    /**
     * Display the about page.
     */
    public function about(): View
    {
        $teams = Team::get();
        // Fetch the last 4 testimonials
        $testimonials = Testimonial::get();
        return view('pages.about.index',compact('teams','testimonials'));
    }

    /**
     * Display the services page.
     */
    public function services(): View
    {
        $teams = Team::get();

        return view('pages.services.index',compact('teams'));
    }

    public function services_show(): View
    {
        return view('pages.services.services_details');
    }

    /**
     * Display the projects page.
     */
    public function projects(): View
    {
        $projects = Project::latest()->paginate(9); 
        return view('pages.projects.index',compact('projects'));
    }

    /**
     * Display the products page.
     */
    public function products(): View
    {
        $products = ProductSite::latest()->paginate(9); 
        return view('pages.products.index',compact('products'));
    }

    /**
     * Display the blogs page.
     */
    public function blogs(): View
    {
        // Fetch blogs and paginate them (e.g., 9 items per page)
        $blogs = Blog::latest()->paginate(9); 

        return view('pages.blogs.index', ['blogs' => $blogs,]);
    }

    /**
     * Display the teams page.
     */
    public function teams(): View
    {
        $teams = Team::get();
        return view('pages.teams.index',compact('teams'));
    }

    /**
     * Display the pricing page.
     */
    public function pricing(): View
    {
        return view('pages.pricing.index');
    }

    /**
     * Display the contact page.
     */
    /**
 * Display the contact page.
 */
public function contact(Request $request): View
{
    $selectedResources = [];
    $resourceSummary = '';
    
    // Parse selected items from query parameters
    if ($request->has('items')) {
        $selectedItems = $request->query('items', []);
        
        foreach ($selectedItems as $item) {
            $parts = explode('|', $item, 2);
            if (count($parts) === 2) {
                $selectedResources[] = [
                    'role' => $parts[0],
                    'experience' => $parts[1]
                ];
            }
        }
        
        // Generate resource summary
        $resourceSummary = $this->generateResourceSummary($selectedResources);
    }
    
    return view('pages.contact.index', [
        'selectedResources' => $selectedResources,
        'resourceSummary' => $resourceSummary
    ]);
}

/**
 * Generate a formatted summary of selected resources.
 */
private function generateResourceSummary(array $resources): string
{
    if (empty($resources)) {
        return '';
    }
    
    $summary = "I'm interested in outsourcing the following resources:\n\n";
    
    // Group by role
    $groupedResources = [];
    foreach ($resources as $resource) {
        $role = $resource['role'];
        if (!isset($groupedResources[$role])) {
            $groupedResources[$role] = [];
        }
        $groupedResources[$role][] = $resource['experience'];
    }
    
    // Create formatted summary
    foreach ($groupedResources as $role => $experiences) {
        $summary .= "• {$role}: " . implode(', ', $experiences) . "\n";
    }
    
    $summary .= "\nPlease contact me with more information about hiring these resources.";
    
    return $summary;
}

    public function faq(): View
    {
        return view('pages.others.faq');
    }
    public function terms(): View
    {
        return view('pages.others.terms_and_condition');
    }
    public function privacy(): View
    {
        return view('pages.others.privacy_and_policy');
    }
    public function working_process(): View
    {
        return view('pages.others.working_process');
    }
}
