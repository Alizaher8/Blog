<?php

use App\Http\Controllers\CommentController;
use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Notify;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

use App\Models\Post;

use function Laravel\Prompts\select;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("push-subscribe", function (Request $request) {
    PushSubscription::create([
        'data' => $request->getContent()
    ]);
});

Route::get("/notify", function () {

    // $usernames = Notify::with('user')->get()->pluck('user.username');
    $info = Notify::join('users', 'notifies.user_id', '=', 'users.id')
        ->select('users.email')
        ->get();
    return  response()->json($info);
});

Route::get("/userposts", function () {
    $user = Auth::user();
    $posts = Post::with([
        'user' => function ($q) {
            $q->select('id', 'firstname', 'lastname', 'image');
        },
        'likes' => function ($q) { // Include the likes relationship with all columns
            $q->select('post_id', 'id', 'user_id'); // Select all columns from the likes table
        }
    ])->get()->toArray();
    $posts = array_map(function ($item) use ($user) {
        // Update the value of the `created_at` attribute with the human-readable format
        $item['created_at'] = Carbon::parse($item['created_at'])->diffForHumans();
        // Append the user authentication ID to the front end
        $item['user_auth_id'] = $user->id;

        return $item;
    }, $posts);


    return  response()->json($posts);
});


Route::post('/posts', [PostController::class, 'addPost']);
Route::post('/likes', [LikeController::class, 'checkLike']);
Route::post('/comments', [CommentController::class, 'addComment']);
//get user image to use in any component
Route::get('/user-image', function () {
    $user = Auth::user();
    $imageUrl = $user ? $user->image : 'default-image.jpg';
    return response()->json(['image' => $imageUrl]);
});
