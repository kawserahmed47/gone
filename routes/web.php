<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageCountryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TotalEarningController;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('all-orders',[OrderController::class, 'allOrders'])->name('allOrders');
Route::get('pending-orders',[OrderController::class, 'pendingOrders'])->name('pendingOrders');
Route::get('processing-orders',[OrderController::class, 'processingOrders'])->name('processingOrders');
Route::get('completed-orders',[OrderController::class, 'completedOrders'])->name('completedOrders');
Route::get('declined-orders',[OrderController::class, 'declinedOrders'])->name('declinedOrders');

Route::get('manage-country', [ManageCountryController::class, 'index'])->name('manage-country');
Route::get('manage-country/state/{countryID}', [ManageCountryController::class, 'countryState'])->name('manage-country.state');
Route::get('manage-country/tax', [ManageCountryController::class, 'countryTax'])->name('manage-country.tax');

Route::prefix('total-earning')->name('total-earning.')->group(function () {
    Route::get('/tax-calculate', [TotalEarningController::class, 'taxCalculate'])->name('taxCalculate');
    Route::get('/subscription-earning', [TotalEarningController::class, 'subscriptionEarning'])->name('subscriptionEarning');
    Route::get('/withdraw-earning', [TotalEarningController::class, 'withdrawEarning'])->name('withdrawEarning');
    Route::get('/commission-earning', [TotalEarningController::class, 'commissionEarning'])->name('commissionEarning');
});

Route::prefix('category')->name('category.')->group(function () {
    Route::get('/main-category', [CategoryController::class, 'mainCategory'])->name('mainCategory');
    Route::get('/sub-category', [CategoryController::class, 'subCategory'])->name('subCategory');
    Route::get('/child-category', [CategoryController::class, 'childCategory'])->name('childCategory');
});