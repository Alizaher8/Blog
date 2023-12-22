 <?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\PostController;
use App\Models\Notify;

use Illuminate\Http\Request;


Route::get('/', function () {return redirect('/login');})->middleware('guest');

	Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
	Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');
    Route::get('/email/verify',[VerificationController::class,'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verify']) ->name('verification.verify');
    Route::post('/email/resend', [VerificationController::class,'resend'])->name('verification.send');

   	Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
	Route::post('/login', [LoginController::class,'login'])->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

    Route::group(['middleware' => ['auth','verified']], function () {
        Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
        Route::get('/general', [PostController::class, 'show'])->name('general');

        Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
        //Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
        Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
        Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
        Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
        Route::get('/{page}', [PageController::class, 'index'])->name('page');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
