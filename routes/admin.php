<?php



use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\PostManageController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mckenziearts\Notify\LaravelNotify;
use App\Models\Notify;




 	Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.show');
	Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.perform');

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/usermanage',[UserManageController::class,'index'])->name('usermanage');
        Route::get('/postmanage',[PostManageController::class,'index'])->name('postmanage');
        Route::post('/filterpost',[PostManageController::class,'filterPosts'])->name('filterposts');
        Route::get('/virtual-reality', [PageController::class, 'vr'])->name('admin.virtual-reality');
        Route::get('/rtl', [PageController::class, 'rtl'])->name('admin.rtl');
        Route::get('/profile', [AdminProfileController::class, 'show'])->name('admin.profile');
        Route::post('/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
        Route::get('/userprofile/{id}', [UserManageController::class, 'showuserprofile'])->name('user.profile');
        Route::post('/userprofile', [UserManageController::class, 'delete'])->name('user.delete');

        Route::get('/profile-static', [PageController::class, 'profile'])->name('admin.profile-static');
        Route::get('/sign-in-static', [PageController::class, 'signin'])->name('admin.sign-in-static');
        Route::get('/sign-up-static', [PageController::class, 'signup'])->name('admin.sign-up-static');
        Route::get('/{page}', [PageController::class, 'index'])->name('admin.page');
        Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout')->middleware('admin');
       // Route::get('/websockets', [BeyondCode\LaravelWebSockets\Dashboard\Http\Controllers::class, '__invoke']);

  