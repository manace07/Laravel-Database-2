<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\TodoListController;
use App\http\Controllers\Main_Controller;
use App\http\Controllers\Product_Controller;
use App\http\Controllers\User_Controller;
use App\http\Controllers\Expenses_Controller;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\GrossProfit_Controller;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Apriori_Controller;
//remove 2 password controllers if not working

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

Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('reset');
Route::post('/reset', [ResetPasswordController::class, 'reset'])->name('update');

Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('request');
Route::post('/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('email');

// -----------

// gross profit routes

Route::get('/Records/GrossProfit', [GrossProfit_Controller::class, 'grossprofit'])->name('grossprofit');

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


    // APRIORI TESTING
    
    //Sunday
    Route::get('/sun-morning', [FirebaseController::class, 'sun_m_CSV'])->name('sun-morning');
    Route::get('/sun-afternoon', [FirebaseController::class, 'sun_a_CSV'])->name('sun-afternoon');
    Route::get('/sun-night', [FirebaseController::class, 'sun_n_CSV'])->name('sun-night');
    //Monday
    Route::get('/mon-morning', [FirebaseController::class, 'mon_m_CSV'])->name('mon-morning');
    Route::get('/mon-afternoon', [FirebaseController::class, 'mon_a_CSV'])->name('mon-afternoon');
    Route::get('/mon-night', [FirebaseController::class, 'mon_n_CSV'])->name('mon-night');
    //Tuesday
    Route::get('/tues-morning', [FirebaseController::class, 'tues_m_CSV'])->name('tues-morning');
    Route::get('/tues-afternoon', [FirebaseController::class, 'tues_a_CSV'])->name('tues-afternoon');
    Route::get('/tues-night', [FirebaseController::class, 'tues_n_CSV'])->name('tues-night');
    //Wednesday
    Route::get('/wed-morning', [FirebaseController::class, 'wed_m_CSV'])->name('wed-morning');
    Route::get('/wed-afternoon', [FirebaseController::class, 'wed_a_CSV'])->name('wed-afternoon');
    Route::get('/wed-night', [FirebaseController::class, 'wed_n_CSV'])->name('wed-night');
    //Thursday
    Route::get('/thurs-morning', [FirebaseController::class, 'thurs_m_CSV'])->name('thurs-morning');
    Route::get('/thurs-afternoon', [FirebaseController::class, 'thurs_a_CSV'])->name('thurs-afternoon');
    Route::get('/thurs-night', [FirebaseController::class, 'thurs_n_CSV'])->name('thurs-night');
    //Friday
    Route::get('/fri-morning', [FirebaseController::class, 'fri_m_CSV'])->name('fri-morning');
    Route::get('/fri-afternoon', [FirebaseController::class, 'fri_a_CSV'])->name('fri-afternoon');
    Route::get('/fri-night', [FirebaseController::class, 'fri_n_CSV'])->name('fri-night');

    //Forecasting
    Route::get('/sun-apriori', [Apriori_Controller::class, 'sunApriori'])->name('sun-apriori');
    Route::get('/mon-apriori', [Apriori_Controller::class, 'monApriori'])->name('mon-apriori');
    Route::get('/tues-apriori', [Apriori_Controller::class, 'tuesApriori'])->name('tues-apriori');
    Route::get('/wed-apriori', [Apriori_Controller::class, 'wedApriori'])->name('wed-apriori');
    Route::get('/thurs-apriori', [Apriori_Controller::class, 'thursApriori'])->name('thurs-apriori');
    Route::get('/fri-apriori', [Apriori_Controller::class, 'friApriori'])->name('fri-apriori');
});



