<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the specified blog post.
     *
     * @param  \App\Models\product  $blog
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(product $product)
    {
        // The framework automatically fetches the blog post based on the route wildcard.
        // It returns a 404 if not found.
        
        return view('pages.products.product_details', compact('product'));
    }

    public function latest()
    {
        $products = Product::orderBy('created_at', 'desc')->take(1)->get();
        return $products;
    }
}
