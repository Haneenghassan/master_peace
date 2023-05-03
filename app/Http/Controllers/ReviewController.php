<?php

namespace App\Http\Controllers;

use App\Models\Preschool;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{


    public function store(Request $request, $id)
    {
        $review = new Review;
        $review->babysitter_id = $request->babysitter_id;
        $review->user_id = auth()->user()->id;
        $review->comment = $request->comment;
        $review->save();
    
    return redirect()->back();
    }

    public function preschoolStore(Request $request, $id)
    {
        $review = new Review;
        $review->preschool_id= $request->preschool_id;
        $review->user_id = auth()->user()->id;
        $review->comment = $request->comment;
        $review->save();
        // $preschool=new Preschool;
        // dd($preschool->reviews);
    
    return redirect()->back();
    }

// to show all reviews in landing page
    public function showReviews() 
    {
        $reviews = Review::get();
        return view('landing' , compact('reviews'));      
    }
}
