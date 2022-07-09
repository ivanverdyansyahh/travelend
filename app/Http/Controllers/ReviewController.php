<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Destination;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $destination_id = $request->destination_id;
        $rating = $request->rating;
        // $comment = $request->comment;

        $check_destination = Destination::where('id', $destination_id)->exists();

        if($check_destination) {
            $existing_review = Review::where('user_id', $user_id)->where('destination_id', $destination_id)->first();

            if($existing_review) {
                $existing_review->rating = $rating;
                // $existing_review->comment = $comment;
                $existing_review->update();
            } else {
                Review::create($request->all());
            }

            return back()->with('success', 'Thank you for review this product');
        } else {
            return back()->with('failed', 'The link you folowed was broken');
        }              
    }
}
