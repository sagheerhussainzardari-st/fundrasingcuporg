<?php

use App\Http\Controllers\Front\DonationController;
use App\Http\Controllers\Front\FundController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\RegisterController;
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

Auth::routes();
Auth::routes(['register' => false]);
Route::get('verify/resend', [App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('verify.resend');
Route::resource('verify', App\Http\Controllers\Auth\TwoFactorController::class)->only(['index', 'store']);
//Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'twofactor']], function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'root'])->name('dashboard');
    // Permissions
    Route::delete('permissions/destroy', [App\Http\Controllers\Admin\PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [App\Http\Controllers\Admin\RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [App\Http\Controllers\Admin\UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

//    Settings
    Route::resource('settings', SettingsController::class)->only(['edit', 'update']);

    // Categories
    Route::delete('categories/destroy', [App\Http\Controllers\Admin\CategoriesController::class, 'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoriesController::class);

    // Funds
    Route::delete('funds/destroy', [App\Http\Controllers\Admin\FundsController::class, 'massDestroy'])->name('funds.massDestroy');
    Route::resource('funds', FundsController::class);

    // Orders
    Route::delete('orders/destroy', [App\Http\Controllers\Admin\OrdersController::class, 'massDestroy'])->name('orders.massDestroy');
    Route::resource('orders', OrdersController::class);

    // Payments
    Route::delete('payments/destroy', [App\Http\Controllers\Admin\PaymentsController::class, 'massDestroy'])->name('payments.massDestroy');
    Route::resource('payments', PaymentsController::class);

    // Update User Details
    Route::put('/update-profile/{user}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/edit-profile', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('editProfile');

    Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});
Route::get('sign-in', [LoginController::class, 'index'])->name('signIn');
Route::post('become-member', [RegisterController::class, 'becomeMember'])->name('becomeMember');
Route::view('sign-up', 'front.auth.sign_up')->name('signUp');
Route::view('fundraising-ideas', 'front.fundraising-ideas')->name('fundraising-ideas');
Route::view('supported-countries', 'front.supported-countries')->name('supported-countries');
Route::post('user-sign-up', [RegisterController::class, 'signUp'])->name('user.signUp');
Route::get('fund/{category}', [FundController::class, 'index'])->name('fund');
Route::get('fund-detail/{fund}', [FundController::class, 'fund'])->name('fund.detail');
Route::get('donate/{fund}', [DonationController::class, 'index'])->name('donation');
Route::post('donation', [DonationController::class, 'donationPost'])->name('donation.post');
Route::get('discover', [App\Http\Controllers\Front\DiscoverController::class, 'index'])->name('discover');
Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('home.index');
Route::get('{any}', [App\Http\Controllers\Front\HomeController::class, 'home'])->name('home');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
