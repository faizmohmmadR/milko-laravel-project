<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchesController;
use App\Http\Controllers\SalesController;
use App\Models\Address;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Employe;
use App\Models\Product;
use App\Models\Purchese;
use App\Models\Sales;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

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
    return view('frontend.home.home');
})->name('home');

Route::get('/about',function(){
    return view('frontend.about.about')->with('page',__('web.about'));
})->name('about');

Route::get('/service',function(){
    return view('frontend.services.services')->with('page',__('web.service'));
})->name('services');

Route::get('/contact',function(){
    return view('frontend.contact.contact')->with('page',__('web.contact'));
})->name('contact');

Route::get('/products',function(){
    return view('frontend.products.products')->with('page',__('web.product'));
})->name('products');

Route::get('/gallery',function(){
    return view('frontend.gallery.gallery')->with('page',__('web.gallery'));
})->name('gallery');

Route::get('/team',function(){
    return view('frontend.team.team')->with('page',__('web.team'));
})->name('team');

Route::get('/feature',function(){
    return view('frontend.feature.feature')->with('page',__('web.feature'));
})->name('feature');

Route::get('/testimonial',function(){
    return view('frontend.testimonial.testimonial')->with('page',__('web.testimonial'));
})->name('testimonial');

Route::get('/notFound',function(){
    return view('frontend.notFound.notFound')->with('page',__('web.notFound'));
})->name('notFound');


Route::resource('/address',AddressController::class);
Route::resource('category',CategoryController::class);
Route::resource('customer',CustomerController::class);
Route::resource('branch',BranchController::class);
Route::resource('employe',EmployeController::class);
Route::resource('product',ProductController::class);
Route::resource('sales',SalesController::class);
Route::resource('purches',PurchesController::class);

Route::get('/locale/{locale}',function($locale){
        app()->setlocale($locale);

        Session()->put('locale',$locale); 
        return redirect()->back();
})->name('locale');

Route::get('test',function(){
    return Employe::find(1)->userInof;
});

Route::get('test',function(){
    return Purchese::find(1)->products;
});



// Route::get('/', function () {
//     return view('backend.dashboard.index');
// })->name('dashboard');

Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
