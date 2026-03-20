<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $userId = Auth::id();

        $comments = $request->only(['item_id', 'content']);

        Comment::create($comments);

        return redirect('/dashboard');
    }
}
