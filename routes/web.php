<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ClientOrderController;
use App\Http\Controllers\ClientOrderInvoiceController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TableOrderController;
use App\Http\Controllers\TableOrderInvoiceController;
use App\Models\TableOrder;
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

//Auth
Route::get('/dashboard/login', [LoginController::class, 'index'])->name('dashboard.login');
Route::post('/dashboard/login', [LoginController::class, 'store'])->name('dashboard.login');
Route::get('/dashboard/register', [RegisterController::class, 'index'])->name('dashboard.register');
Route::post('/dashboard/register', [RegisterController::class, 'store'])->name('dashboard.register');
Route::post('/dashboard/logout', [LogoutController::class, 'store'])->name('dashboard.logout');
//restaurant-login
Route::get('/login', [LoginController::class, 'index'])->name('restaurant.login');
Route::post('/login', [LoginController::class, 'store'])->name('restaurant.login');
Route::get('/register', [RegisterController::class, 'index'])->name('restaurant.register');
Route::post('/register', [RegisterController::class, 'store'])->name('restaurant.register');
Route::post('/logout', [LogoutController::class, 'store'])->name('restaurant.logout');

Route::get('/tables/{table}/order', [TableOrderController::class,'create'])->name('dashboard.tables.orders.create')->middleware('can:visit.dashboard');
Route::post('/tables/{table}/order', [TableOrderController::class,'store'])->name('dashboard.tables.orders.store')->middleware('can:visit.dashboard');

//chef
Route::get('/dashboard/chefs/orders', [ChefController::class,'index'])->name('dashboard.chefs.orders')->middleware('can:visit.dashboard');
Route::put('/dashboard/chefs/{tableOrder}/orders', [ChefController::class,'update'])->name('dashboard.chefs.update')->middleware('can:visit.dashboard');
Route::put('/dashboard/chefs/delivered/{clientOrder}/orders', [ChefController::class,'store'])->name('dashboard.chefs.store')->middleware('can:visit.dashboard');
//delivery
Route::get('/dashboard/delivery', [DeliveryController::class,'index'])->name('dashboard.delivery')->middleware('can:visit.dashboard');
Route::put('/dashboard/delivery/{clientOrder}', [DeliveryController::class,'store'])->name('dashboard.delivery.store')->middleware('can:visit.dashboard');

Route::get('/dashboard/tablesorder/{tableOrder}/invoice', [TableOrderInvoiceController::class,'index'])->name('dashboard.invoice.tableorder')->middleware('can:visit.dashboard');
Route::get('/dashboard/clientorder/{clientOrder}/invoice', [ClientOrderInvoiceController::class,'index'])->name('dashboard.invoice.clientorder')->middleware('can:visit.dashboard');


Route::get('/about', function (){
    return view('restaurant.about');
})->name('restaurant.about');

Route::get('/menu', [RestaurantController::class,'index'])->name('restaurant.menu');
Route::get('/', [RestaurantController::class,'index'])->name('restaurant.home');
Route::get('/home', [RestaurantController::class,'index'])->name('restaurant.home');
Route::get('/meals/{meal}', [MealController::class,'show'])->name('meals.show');
// Route::get('/tables/orders/create', [CategoryController::class,'index'])->name('dashboard.tables.list');
Route::get('/food-shop', function (){
    return view('restaurant.food-shop');
})->name('restaurant.food-shop')->middleware('can:visit.restaurant');

Route::get('/contact', function (){
    return view('restaurant.contact');
})->name('restaurant.contact');

Route::get('/checkout', function (){
    return view('restaurant.checkout');
})->name('restaurant.checkout')->middleware('can:visit.restaurant');

Route::get('/shopping-card/index',[MealController::class,'cart'])->name('restaurant.shopping-card')->middleware('can:visit.restaurant');
Route::get('/shopping-card/{id}', [MealController::class,'addToCart'])->name('restaurant.shopping-card.add')->middleware('can:visit.restaurant');
Route::get('/shopping-card', [ClientOrderController::class,'create'])->name('restaurant.shopping-card.create')->middleware('can:visit.restaurant');
Route::post('/shopping-card', [ClientOrderController::class,'store'])->name('restaurant.shopping-card.store')->middleware('can:visit.restaurant');

Route::group(['prefix' => '/dashboard'], function () {
    Route::resource('/clients',App\Http\Controllers\ClientController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/tables',App\Http\Controllers\TableController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/suppliers',App\Http\Controllers\SupplierController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/ingredients',App\Http\Controllers\IngredientController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/categories',App\Http\Controllers\CategoryController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/employees',App\Http\Controllers\EmployeeController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/meals',App\Http\Controllers\MealController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/users',App\Http\Controllers\UserController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/client-orders',App\Http\Controllers\ClientOrderController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/client-bills',App\Http\Controllers\ClientBillController::class , array("as"=>"dashboard"))->except(['edit', 'update'])->middleware('can:visit.dashboard');
    Route::resource('/supplier-orders',App\Http\Controllers\SupplierOrderController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/supplier-bills',App\Http\Controllers\SupplierBillController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/table-orders',TableOrderController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::resource('/table-bills',App\Http\Controllers\TableBillController::class , array("as"=>"dashboard"))->middleware('can:visit.dashboard');
    Route::get('/', [\App\Http\Controllers\DashboardHomeController::class, 'index'])->name('dashboard.home')->middleware('can:visit.dashboard');
    Route::get('/home', [\App\Http\Controllers\DashboardHomeController::class, 'index'])->name('dashboard.home')->middleware('can:visit.dashboard');
});






