<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Treatment;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::share('treatments', Treatment::query()->orderBy('sort_number', 'ASC')->get());
        View::share('products', Product::query()->orderBy('sort_number', 'ASC')->get());
    }
}
