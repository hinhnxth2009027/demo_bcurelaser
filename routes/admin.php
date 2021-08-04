<?php


use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\FacebookReviewController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\TrialController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(\route('list_contact'));
});

Route::prefix('trials')->group(function () {
    Route::get('', [TrialController::class, 'list'])->name('list_trial');
    Route::get('/create', [TrialController::class, 'create'])->name('create_trial');
    Route::post('/create', [TrialController::class, 'store'])->name('store_trial');
    Route::get('/{id}/edit', [TrialController::class, 'edit'])->name('edit_trial');
    Route::put('/{id}/edit', [TrialController::class, 'update'])->name('update_trial');
    Route::get('/{id}/delete', [TrialController::class, 'delete'])->name('delete_trial');
});

Route::prefix('users')->group(function () {
    Route::get('', [UserController::class, 'list'])->name('list_user');
    Route::get('/create', [UserController::class, 'create'])->name('create_user');
    Route::post('/create', [UserController::class, 'store'])->name('save_user');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit_user');
    Route::put('/{id}/edit', [UserController::class, 'update'])->name('update_user');
    Route::get('/{id}/delete', [UserController::class, 'delete'])->name('delete_user');
});

Route::prefix('treatments')->group(function () {
    Route::get('', [TreatmentController::class, 'list'])->name('list_treatment');
    Route::get('/create', [TreatmentController::class, 'create'])->name('create_treatment');
    Route::post('/create', [TreatmentController::class, 'store'])->name('store_treatment');
    Route::get('/{id}/edit', [TreatmentController::class, 'edit'])->name('edit_treatment');
    Route::put('/{id}/edit', [TreatmentController::class, 'update'])->name('update_treatment');
    Route::get('/{id}/delete', [TreatmentController::class, 'delete'])->name('delete_treatment');
});

Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'list'])->name('list_product');
    Route::get('/create', [ProductController::class, 'create'])->name('create_product');
    Route::post('/create', [ProductController::class, 'store'])->name('store_product');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit_product');
    Route::put('/{id}/edit', [ProductController::class, 'update'])->name('update_product');
    Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('delete_product');
});

Route::prefix('testimonials')->group(function () {
    Route::get('', [TestimonialController::class, 'list'])->name('list_testimonial');
    Route::get('/create', [TestimonialController::class, 'create'])->name('create_testimonial');
    Route::post('/create', [TestimonialController::class, 'store'])->name('post_testimonial');
    Route::get('/{id}/edit', [TestimonialController::class, 'edit'])->name('edit_testimonial');
    Route::post('/{id}/edit', [TestimonialController::class, 'update'])->name('update_testimonial');
    Route::get('/{id}/delete', [TestimonialController::class, 'delete'])->name('delete_testimonial');
});

Route::prefix('faq')->group(function () {
    Route::get('', [FaqController::class, 'list'])->name('list_faq');
    Route::get('/create', [FaqController::class, 'create'])->name('create_faq');
    Route::post('/create', [FaqController::class, 'store'])->name('store_faq');
    Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('edit_faq');
    Route::post('/{id}/edit', [FaqController::class, 'update'])->name('update_faq');
    Route::get('/{id}/delete', [FaqController::class, 'delete'])->name('delete_faq');
});

Route::prefix('contacts')->group(function () {
    Route::get('', [ContactController::class, 'list'])->name('list_contact');
    Route::get('/{id}/detail', [ContactController::class, 'detail'])->name('detail_contact');
    Route::get('/{id}/delete', [ContactController::class, 'delete'])->name('delete_contact');
});

Route::prefix('facebook-reviews')->group(function () {
    Route::get('', [FacebookReviewController::class, 'list'])->name('list_facebook_review');
    Route::get('/create', [FacebookReviewController::class, 'create'])->name('create_facebook_review');
    Route::post('/create', [FacebookReviewController::class, 'store'])->name('save_facebook_review');
    Route::get('/{id}/edit', [FacebookReviewController::class, 'edit'])->name('edit_facebook_review');
    Route::put('/{id}/edit', [FacebookReviewController::class, 'update'])->name('update_facebook_review');
    Route::get('/{id}/delete', [FacebookReviewController::class, 'delete'])->name('delete_facebook_review');
});

Route::prefix('banners')->group(function () {
    Route::get('', [BannerController::class, 'list'])->name('list_banner');
    Route::get('/create', [BannerController::class, 'create'])->name('create_banner');
    Route::post('/create', [BannerController::class, 'store'])->name('save_banner');
    Route::get('/{id}/edit', [BannerController::class, 'edit'])->name('edit_banner');
    Route::put('/{id}/edit', [BannerController::class, 'update'])->name('update_banner');
    Route::get('/{id}/delete', [BannerController::class, 'delete'])->name('delete_banner');
});
