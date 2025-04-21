<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea) {
        $comment = new Comment;
        $comment->idea_id = $idea->id; // Linking the comment to the idea
        $comment->content = request()->get('content'); // Getting content from the request
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment added successfully');
    }


    public function destroy(Comment $comment){
        $comment->delete();
        return redirect()->route('ideas.show', $comment->idea_id)->with('success', 'Comment deleted successfully');
        }


        // public function edit(Comment $comment){
        //     return view('ideas.show' , ['comment' => $comment , 'editing' => true]);
        // }
}
