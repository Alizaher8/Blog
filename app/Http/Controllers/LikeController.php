<?php

namespace App\Http\Controllers;

use App\Models\Notify;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Like;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Events\PostsUser;
use App\Events\UserRegister;
use App\Traits\ImagesTrait;


class LikeController extends Controller
{
    use ImagesTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkLike(Request $request)
    {
        $user = Auth::user();
        $like = $request->like;
        if ($like == 1) {

            Like::create([

                'post_id' => $request->post_id,
                'user_id' => $user->id,


            ]);
        } else {
            try {
                $deleted = Like::where('user_id', $user->id)
                    ->where('post_id', $request->post_id)
                    ->delete();
                    Log::info('User ID: ' . $user->Id);
                    Log::info('Post ID: ' . $request->post_id);

                if ($deleted) {
                    Log::info('Like deleted successfully.');
                } else {
                    Log::warning('No matching like found for deletion.');
                }
            } catch (\Exception $e) {
                // Handle the exception, log the error, or return an error response
                // For example:
                return response()->json(['error' => 'An error occurred while deleting the like.'], 500);
            }
        }
    }
}
