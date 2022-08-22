<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class DashboardCommentController extends Controller
{
    public function index($id)
    {
        return view('dashboard.comment.index', [
            'comments' => Comment::all()
        ]);
    }
}
