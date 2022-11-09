<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\RegistrationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/view', function () {
    return view('production.viewCustomer');
});

// Route::group(['middleware' => ['auth:passport']], function() {

    // Account
    ROUTE::get('/account/add', [AccountController::class, 'index'])->name('addAccount');
    ROUTE::get('/account/view', [AccountController::class, 'histories'])->name('viewAccount');
    ROUTE::post('/account/load', [AccountController::class, 'loads'])->name('account.create');
    ROUTE::get('/account/delete{id}', [AccountController::class, 'destroy'])->name('deleteAccount');

    // Customer
    ROUTE::get('/customer', [CustomerController::class, 'index'])->name('home.customer');
    ROUTE::get('/', [CustomerController::class, 'home'])->name('home.page');
    // ROUTE::get('/', [CustomerController::class, 'home'])->middleware(['auth'])->name('home.page');
    ROUTE::get('/view', [CustomerController::class, 'view'])->name('view.customer');
    ROUTE::post('/customer/store', [CustomerController::class, 'store'])->name('customer.create');
    ROUTE::get('/customer/delete{id}', [CustomerController::class, 'destroy'])->name('deleteCustomer');

    // Add Load
    ROUTE::get('/customer/load', [AddCustomerController::class, 'load'])->name('add.load');
    ROUTE::post('/customer/add', [AddCustomerController::class, 'add'])->name('customer.add');

    // Records
    ROUTE::get('/customer/records{id}', [RecordController::class, 'records'])->name('customer.record');
    ROUTE::get('/customer/records/delete{id}', [RecordController::class, 'delete'])->name('deleteRecords');
    ROUTE::get('/customer/edit{id}', [RecordController::class, 'edit'])->name('editRecords');

    // ROUTE::get('/login', [RegisterController::class, 'login']);
    ROUTE::get('/login', [RegistrationController::class, 'login'])->name('login.page');
    ROUTE::post('/auth', [RegistrationController::class, 'auth'])->name('auth');
    ROUTE::get('/register', [RegistrationController::class, 'register'])->name('create.register');
    ROUTE::post('/register/store', [RegistrationController::class, 'store'])->name('register');
    ROUTE::get('/registration', [RegistrationController::class, 'data']);

// });