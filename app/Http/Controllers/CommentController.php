<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Events\CommentPost;



class CommentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function addComment(Request $request)
   {
      $user_id= Auth::id();
      Comment::create([

        'comment' => $request->comment,
        'post_id'=> $request->post_id,
        'user_id'=>$user_id


    ]);
    event(new CommentPost( $request->comment));

   }
}
