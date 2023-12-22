<?php

use App\Models\PushSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Notify;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

use App\Models\Post;

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
Route::post("push-subscribe",function(Request $request){
  PushSubscription::create([
    'data'=>$request->getContent()
  ]);

});

Route::get("/notify", function (){
   // $usernames = Notify::with('user')->get()->pluck('user.username');
    $info = Notify::join('users', 'notifies.user_id', '=', 'users.id')
    ->select('users.email')
    ->get();
     return  response()->json($info);
});
Route::get("/userposts", function (){
    $info = Post::join('users', 'posts.user_id', '=', 'users.id')
     ->select('users.firstname','users.lastname','users.image','posts.content','posts.created_at','posts.photo')
     ->get()
     ->toArray();
    //  $info->transform(function ($item) {
    //     // Update the existing `created_at` attribute with the human-readable format
    //     $item->created_at_human = $item->created_at->diffForHumans();
    //           return $item;
    // });
    $info = array_map(function ($item) {
        // Update the value of the `created_at` attribute with the human-readable format
        $item['created_at'] = Carbon::parse($item['created_at'])->diffForHumans();

        return $item;
    }, $info);
     return  response()->json($info);
    });


Route::post('/posts',[PostController::class,'addPost']);
