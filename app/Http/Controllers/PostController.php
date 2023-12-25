<?php

namespace App\Http\Controllers;
use App\Models\Notify;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Events\PostsUser;
use App\Events\UserRegister;
use App\Traits\ImagesTrait;


class PostController extends Controller
{
    use ImagesTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {


        $user = User::where('id', Auth::id())->first();
        //  dd($user->id);

        return view('front.pages.general', compact('user'));
    }
    public function addPost(Request $request)
    {
        $photos = $request->file('photos');
         if($photos != null){
        // Access uploaded files

        foreach ($photos as $photo) {
            // Process and store each photo
            $path = $photo->store('photos', 'public');

            // You can then save the $path to the database or perform any other required operations
             // Get the photo name from the path
            $photo_name = basename($path);
            $uploadedImagePaths[] = $photo_name;


        }
    }
    else{
        $photo_name=null;
    }
    $jsonImagePaths = json_encode($uploadedImagePaths);
        $user = Auth::user();
        // $validator = Validator::make($request->all(), [
        //     // 'title' => 'required',
        //     'content' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()], 400);
        // }

        $post = Post::create([
            //  'title' => $request->input('title'),
            'content' => $request->content,
            'user_id' => $user->id,
            'photo'=>$jsonImagePaths

        ]);
        Notify::create([
            'content'=>$post->content,
            'type'=>2,
            'user_id'=>Auth::id(),
            'post_id'=>$post->id,
            'comment_id'=>null,
        ]);

        event(new PostsUser($post,$user));
        event(new UserRegister($user));
        Log::info('PostUser event data: ' . json_encode($post));

        return response()->json(['post' => $post], 201);
    }
    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->update($request->all());

        return response()->json(['post' => $post], 200);
    }

    public function softDeletePost($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->delete(); // Soft delete the post

        return response()->json(['message' => 'Post soft deleted successfully'], 200);
    }

    // Permanently delete a soft-deleted post
    public function forceDeletePost($id)
    {
        $post = Post::withTrashed()->find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->forceDelete(); // Permanently delete the post

        return response()->json(['message' => 'Post permanently deleted successfully'], 200);
    }
}
