<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class DashboardCommentController extends Controller
{
    public function index($id)
    {
        $comments = Comment::select("*")->where('user_id', $id)->get();
        return view('dashboard.comment.index', [
            'comments' => $comments
        ]);
    }
}
