<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    public function storeComment(Post $post, CommentsRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $comment = new Comment();

        $comment->post_id = $post->id;
        $comment->author  = $data['author'];
        $comment->text    = $data['text'];
        $comment->save();

        return back();
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return back();
    }
}
