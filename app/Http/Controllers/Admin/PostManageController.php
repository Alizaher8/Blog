<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImagesTrait;


class PostManageController extends Controller
{
    use ImagesTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
         return view('admin.pages.post-management');
    }

    public function filterPosts(Request $request)

    {
        $query=Post::query();
        $d=$request->toArray();


        foreach ($d as $key => $value){
         if($value != null && $key!='_token'){
            if($key == "created_at")
               {$query->whereDate($key,'=',$value);}
            else
              { $query->whereHas('user',function ($query) use($key,$value){
                $query->where($key,$value);
              });   }
            
         }

        }
         $posts=$query->get();
         //dd($posts);
    
        return view('admin.pages.post-management', compact('posts'));

            }
    public function delete(Request $request){

                $user = User::find($request -> id);   // Offer::where('id','$offer_id') -> first();

                if (!$user)
                    return redirect()->back()->with(['error' => __('messages.offer not exist')]);

                $user->delete();

                return response()->json([
                    'status' => true,
                    'id' =>  $request -> id
                ]);

            }

}
