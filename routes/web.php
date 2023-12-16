<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.about.about');
})->name('about');

Route::get('/service',function(){
    return view('frontend.services.services');
})->name('services');

Route::get('/contact',function(){
    return view('frontend.contact.contact');
})->name('contact');

Route::get('/products',function(){
    return view('frontend.products.products');
})->name('products');

Route::get('/gallery',function(){
    return view('frontend.gallery.gallery');
})->name('gallery');

Route::get('/team',function(){
    return view('frontend.team.team');
})->name('team');

Route::get('/feature',function(){
    return view('frontend.feature.feature');
})->name('feature');

Route::get('/testimonial',function(){
    return view('frontend.testimonial.testimonial');
})->name('testimonial');
Route::get('/notFound',function(){
    return view('frontend.notFound.notFound');
})->name('notFound');


Route::resource('/address',AddressController::class);

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
