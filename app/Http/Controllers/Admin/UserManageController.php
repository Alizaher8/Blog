<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImagesTrait;



class UserManageController extends Controller
{
    use ImagesTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {

         $users = User::latest()->paginate(10);
         return view('admin.pages.user-management',compact('users'));
    }

    public function showuserprofile($id)
    {

       $user=User::find($id);

       return view('admin.pages.user-profile', compact('user'));

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
