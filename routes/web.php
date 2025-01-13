<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\InquiryController;

// Route::get('/', function () {
//     return view('index');
// })->name('home');
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gallery', [HomeController::class, 'galleryPage'])->name('gallery');
Route::get('/category/{slug}', [HomeController::class, 'showCategory'])->name('category.posts');
Route::get('/post/{id}',[HomeController::class, 'postDetail'])->name('post.detail');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/about', function () {
    return view('blog-detail');
})->name('about');


Route::get('/inquiry', function () {
    return view('inquiry');
})->name('inquiry');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Post routes
    Route::resource('posts', PostController::class);

    // Gallery routes
    Route::resource('galleries', GalleryController::class);
    //Category routes
    Route::resource('categories', CategoryController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    // Redirect GET requests for /submit-inquiry to the home or form page
    Route::get('/submit-inquiry', function () {
        return redirect('/');
    });

    // Handle POST requests for form submission
    Route::post('/submit-inquiry', [InquiryController::class, 'submitInquiry'])->name('inquiry.submit');



require __DIR__ . '/auth.php';
