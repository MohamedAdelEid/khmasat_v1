<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\SocialLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;


require __DIR__ . '/auth.php';


/*
    |--------------------------------------------------------------------------
    | FRONTEND ROUTES
    |--------------------------------------------------------------------------
    | These routes handle all the frontend views and functionalities accessible
    | by users or guests. They manage the user interface, site navigation, and
    | public-facing content.
    |--------------------------------------------------------------------------
*/
Route::group([
    'middleware',
], function () {

    //--------------------------------/* HOME ROUTE */--------------------------------
    Route::get('/', function () {
        // return view('front.index');
    })->name('front.welcome');

    //--------------------------------/* PROPERTIES ROUTE */--------------------------------
    Route::get('/properties', function () {
        return view('front.properties');
    })->name('front.properties');

    //--------------------------------/* PROPERTY-DETILES ROUTE */--------------------------------
    Route::get('/property-detiles/{property}',[PropertyController::class,'show'])->name('front.property-detiles');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
| These routes are reserved for the admin panel. Admins have full access
| to manage users, roles, permissions, and other sensitive settings.
|--------------------------------------------------------------------------
*/
Route::group(
    [
        'prefix' => 'admin',
    ],
    function () {

        //--------------------------------/* DASHBOARD ROUTE */--------------------------------
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        //--------------------------------/* PROPERTY ROUTES */--------------------------------
        Route::resource('/properties', PropertyController::class);

    }
);

Route::get('auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])->name('auth.socialite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('auth.socialite.callback');