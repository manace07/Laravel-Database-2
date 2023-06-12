<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\TodoListController;
use App\http\Controllers\Main_Controller;
use App\http\Controllers\Product_Controller;
use App\http\Controllers\User_Controller;
use App\http\Controllers\Expenses_Controller;
use App\http\Controllers\Supplier_Controller;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes([
    'verify' => true
]);


// page routes 

Route::get('/Products',[Main_Controller::class, 'productPage']) 
->name('productPage');

Route::get('/Dashboard',[Main_Controller::class, 'dashboard'])
->name('dashboard');

Route::get('/Records',[Main_Controller::class, 'records'])
->name('records');

Route::get('/Inventory',[Main_Controller::class, 'inventory'])
->name('inventory');

Route::get('/Sales Report',[Main_Controller::class, 'salesreport'])
->name('salesreport');


// -----------


// product routes 

Route::post('/saveItemRoute',[TodoListController::class, 'saveItem']) 
->name('saveItem');

Route::get('/Products',[Main_Controller::class, 'productPage']) 
->name('productPage');

Route::get('/Home', [Main_Controller::class, 'homePage'])
->name('home');

Route::get('/AddProduct',[Main_Controller::class, 'addProduct']) 
->name('addprod');

Route::post('/Store',[Product_Controller::class, 'store']) 
->name('store');

Route::get('/products/{id}',[Product_Controller::class, 'show'])
->name('viewprod');

Route::get('/UpdateProducts/{id}',[Product_Controller::class, 'edit']) 
->name('editprod');

Route::post('/update/{id}', [Product_Controller::class, 'update'])->name('update');




Route::delete('/Delete/{id}',[Product_Controller::class, 'destroy']) 
->name('delete');

Route::resource('products_table', Product_Controller::class);

// ----------

// expenses routes

Route::get('/Expenses',[Main_Controller::class, 'expense']) 
->name('expensePage');

Route::get('/test',[Main_Controller::class, 'testFirebase']) 
->name('test');


Route::get('/AddExpenses', [Expenses_Controller::class, 'create'])
->name('productExpenses');

Route::post('/Add',[Expenses_Controller::class, 'store']) 
->name('Expense_store');

Route::get('/Expenses/{id}',[Expenses_Controller::class, 'show'])
->name('viewexpense');

Route::delete('/DeleteExpense/{id}',[Expenses_Controller::class, 'destroy']) 
->name('delete_exp');

Route::put('/UpdateExpense/{id}',[Expenses_Controller::class, 'update']) 
->name('update_exp');

Route::get('/UpdateExpense/{id}',[Expenses_Controller::class, 'edit']) 
->name('editexpense');



// ----------

// LOGIN ROUTES

Route::group(['middleware' => ['web']], function () {

    Route::get('/register', [User_Controller::class, 'register'])->name('register');

    Route::post('/registration', [User_Controller::class, 'validateRegistration'])->name('registration.submit');

    Route::get('/logout', [Main_Controller::class, 'logout'])->name('logout');

    Route::get('/products', [User_Controller::class, 'products'])->name('products');

    Route::get('/login', [User_Controller::class, 'showLoginForm'])->name('login');

    Route::post('/login', [User_Controller::class, 'validateLogin'])->name('login.validate');

    // ----------

    // SUPPLIER ROUTES

    Route::get('/Records/Suppliers', [Main_Controller::class, 'supplier'])->name('supplier');

    Route::get('/Records/Suppliers/Add_supplier', [Main_Controller::class, 'addSupplier'])->name('addsupplier');

    Route::post('/Records/Suppliers/Add_supplier', [Main_Controller::class, 'store'])->name('insert.supplier');

    Route::delete('/DeleteSupplier/{id}', [Main_Controller::class, 'delete_supplier'])->name('delete_supplier');


});



