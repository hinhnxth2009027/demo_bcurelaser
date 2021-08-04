<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TrialController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Controllers\TreatmentController;
use App\Models\Banner;
use App\Models\FacebookReview;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', checkAdmin::class])->group(function () {
    require_once __DIR__ . '/admin.php';
});
Route::get('/admin/login', [UserController::class, 'login'])->name('login_user');
Route::post('/admin/login', [UserController::class, 'processLogin'])->name('processLogin_user');
Route::get('/admin/logout', [UserController::class, 'logout'])->name('logout_user');
Route::view('/', 'index', [
    'banners' => Banner::query()->orderBy('sort_number', 'ASC')->get(),
    'reviews' => FacebookReview::query()->orderBy('sort_number', 'ASC')->get(),
    'featured_product' => Product::query()->where('is_featured','=',true)->orderBy('sort_number','ASC')->get(),
])->name('index');
Route::view('who-are-we', 'who-are-we')->name('who-are-we');
Route::view('what-is-b-cure-laser', 'what-is-product',[
    'featured_product' => Product::query()->where('is_featured','=',true)->orderBy('sort_number','ASC')->get(),
])->name('what-is');
Route::view('faq', 'faq', ['faqs' => Faq::query()->orderBy('sort_number', 'ASC')->get()])->name('faq');
Route::get('treatment', [TreatmentController::class, 'list'])->name('treatment');
Route::get('treatment/{slug}', [TreatmentController::class, 'detail'])->name('treatment_detail');
Route::get('product/{slug}', [ProductController::class, 'detail'])->name('product_detail');
Route::get('product', [ProductController::class, 'list'])->name('product');
Route::get('/trial', [TrialController::class, 'list'])->name('trial');
Route::get('/testimonial', [TestimonialController::class, 'list'])->name('testimonial');
Route::view('contact', 'contact')->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('create_contact');
Route::post('upload/image', [Controller::class, 'upload_images'])->name('images_uploads');
