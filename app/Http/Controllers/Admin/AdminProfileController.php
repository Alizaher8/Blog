<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImagesTrait;
use App\Events\UserRegister;
use App\Models\User;



class AdminProfileController extends Controller
{
    use ImagesTrait;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show()
    {


         $admin = Admin::where('id',Auth::guard('admin')->id())->first();
        
         return view('admin.pages.admin-profile',compact('admin'));
    }

    public function update(Request $request)
    {


            $admin= Admin::find(Auth::guard('admin')->id());

            $admin->username = $request->username;
            $admin->firstname = $request->firstname;
            $admin->email = $request->email;
            $admin->address = $request->address;
            $admin->city = $request->city;
            $admin->country = $request->country;
            $admin->postal = $request->postal;
            $admin->about = $request->about;
            if($request->has('image'))
             {
                $file_name=$this->saveImage($request->image,'uploads/admins');
                $admin->image = $file_name;
             }
            $admin->status = $request->status;
            $admin->save();

            return response()->json([
                'status' => true,
                'msg' => 'Admin updated successfuly'
            ]);

}
}
