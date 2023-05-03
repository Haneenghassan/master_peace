<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\BabysitterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileuserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PreschoolreservationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






Route::get('/landing', function () {
    return view('landing');
});





Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('register');
});


// Route::get('/login', function () {
    //     return view('login');
    // });
    
    
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    
    Route::get('/sidebar', function () {
        return view('layout.sidebar');
    });
    
    Route::get('/signup', function () {
        return view('signup');
    });
    
    
    Route::middleware('auth')->group(function () {
        Route::get('/profileuser/index', [ProfileuserController::class, 'index'])->name('profileuser.index');
        Route::get('/profileuser/show/{id}', [ProfileuserController::class, 'show'])->name('profileuser.show');
        Route::get('/profileuser', [ProfileuserController::class, 'edit'])->name('profileuser.edit');
        Route::patch('/profileuser', [ProfileuserController::class, 'update'])->name('profileuser.update');
        Route::delete('/profileuser', [ProfileController::class, 'destroy'])->name('profileuser.destroy');
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
        Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/indexbaby', [ProfileController::class, 'indexbaby'])->name('profile.indexbaby');
        Route::get('/profile/show/{id}', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/profile/showPreschool/{id}', [ProfileController::class, 'showPreschool'])->name('profile.showPreschool');
        Route::post('/addprofile', [ProfileController::class, 'store'])->name('profile.store');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/profile/editBabysitter/{id}', [ProfileController::class, 'editBabysitter'])->name('profile.editBabysitter');
        Route::put('/profile/updateprofile/{id}', [ProfileController::class, 'updateprofile'])->name('profile.updateprofile');
        Route::get('/profile/{id}', [ProfileController::class, 'editPreschool'])->name('profile.editPreschool');
        Route::put('/profile/{id}', [ProfileController::class, 'updatePreschool'])->name('profile.updatePreschool');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    

    Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
        Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/preschools',PreschoolController::class);
    Route::resource('/babysitters',BabysitterController::class);
});


    Route::get('/preschoolpage',[LandingController::class,'preschoolsindex'])->name('preschoolspage');
    Route::get('/babysitterpage',[LandingController::class,'babysitterindex'])->name('babysitterpage');
    // Route::get('/master',[LandingController::class,'preschoolsnav'])->name('preschoolsnav');
    Route::post('/babysitters/{babysitter}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::post('/preschools/{preschool}/reviews', [ReviewController::class, 'preschoolStore'])->name('reviews.preschoolStore');
    Route::get('/landing', [ReviewController::class, 'showReviews'])->name('landing');
    Route::resource('/preschools',PreschoolController::class);
    Route::resource('/babysitters',BabysitterController::class);
    Route::resource('/reservations',ReservationController::class);
    Route::resource('/Preschoolreservations',PreschoolreservationController::class);


    
 




require __DIR__.'/auth.php';
