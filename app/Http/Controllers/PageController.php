<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\ProductSite;
use App\Models\Testimonial;
use App\Models\Team;
use Illuminate\View\View;
use App\Http\Controllers\ServiceController;

class PageController extends Controller
{
    /**
     * Display the home page with recent data.
     */
    public function home(): View
    {
        // Fetch the last 4 projects
        $recentProjects = Project::latest()->take(4)->get();

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
    public function contact(): View
    {
        return view('pages.contact.index');
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
}
