<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;

class LandingFrontendController extends Controller
{
    // public function home()
    // {
    //     return view('home');
    // }

    // public function destinations()
    // {
    //     // $destinations = Destination::latest()->filter(request(['search', 'category']))->with('category')->paginate(12);
    //     $destinations = Destination::getDestinationsReviewWithPaginate(request('category'), request('search'));
    //     $categories = Category::all();

    //     return view('destinations', compact('destinations', 'categories'));
    // }

    // public function destination($category_slug, $destination_slug)
    // {
    //     $find_category = Category::where('slug', $category_slug);
    //     $find_destination = Destination::where('slug', $destination_slug);

    //     if($find_category->exists()) {
    //         if($find_destination->exists()) {
    //             $destination = Destination::where('slug', $destination_slug)->with('category')->first();
    //             $others = Destination::inRandomOrder()->where('id', '!=', $destination->id)->limit(3)->get();
    //         }
    //     }        

    //     return view('destination', compact('destination', 'others'));
    // }
}
