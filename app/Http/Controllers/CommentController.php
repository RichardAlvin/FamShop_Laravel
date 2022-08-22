<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'stars' => 'required | max:5',
            'message' => 'required',
            'user_id' => 'required'
        ]);

        Comment::create($validatedData);

        return redirect('/comment')->with('success', "Thank you for your Comment");
    }
}
