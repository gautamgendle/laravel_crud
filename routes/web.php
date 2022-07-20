<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;

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

/* Route::get('/demo/{name}/{id?}', function($name, $id = null)
    {
        echo $name. ' ';
        echo $id;
        $data = compact('name', 'id');
        print_r($data);
        return view('demo')->with($data);
    
}); 
Route::get('/index', [DemoController::class, 'index']);
Route::get('/about', 'App\Http\Controllers\DemoController@about');

Route::resource('photo', PhotoController::class);

?> */
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [RegistrationController::class, 'dashboard']);
Route::get('/register', [RegistrationController::class, 'userRegister']);
Route::post('/register', [RegistrationController::class, 'register'])->name('register.user');
Route::post('/login', [RegistrationController::class, 'login'])->name('login.user');
Route::get('/login', [RegistrationController::class, 'userLogin']);
Route::get('/logout', [RegistrationController::class, 'logout'])->name('logout.user');

Route::get('/customer/create', [CustomerController::class, 'index'])->name('customer.create');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::delete('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');


