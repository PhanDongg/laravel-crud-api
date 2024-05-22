<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
    public function ratePost(Request $request)
    {
        $user = Auth::user();
        $postId = $request->input('post_id');
        $rating = $request->input('rating');

        $existingRating = Rating::where('user_id', $user->id)->where('post_id', $postId)->first();
       
        if ($existingRating) {
            $existingRating->rating = $rating;
            $existingRating->save();
        } else {
            Rating::create([
                'user_id' => $user->id,
                'post_id' => $postId,
                'rating' => $rating,
            ]);
        }
    }    
}
