<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display the specified blog post.
     *
     * @param  \App\Models\Project  $blog
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(Project $project)
    {
        // The framework automatically fetches the blog post based on the route wildcard.
        // It returns a 404 if not found.
        
        return view('pages.projects.project_details', compact('project'));
    }
}
