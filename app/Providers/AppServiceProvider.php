<?php

namespace App\Providers;

use App\Helper\CartHelper;
use App\Models\brand;
use App\Models\Category;
use App\Models\Size;
use Illuminate\Pagination\Paginator;
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
        view()->composer('*', function ($view) {
            $view->with([
                'cartHelper'=> new CartHelper,
                'category' => Category::where('status', 1)->get(),
                'brand' => brand::where('status', 1)->get(),
                'size' => Size::where('status', 1)->get()
            ]);
        });
    }
}
