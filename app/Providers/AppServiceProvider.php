<?php

namespace App\Providers;

use App\ProductCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->sidebarCategories();

        $this->headerProductCategories();

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function sidebarCategories()
    {
        view()->composer('front.partials.shopsidebar', function ($view) {
            $view->with('product_categories', ProductCategory::whereNull('parent_id')->get());
        });
    }

    public function headerProductCategories()
    {
        view()->composer('front.partials.header', function ($view) {
            $view->with('header_product_categories', ProductCategory::whereNull('parent_id')->get
            ());
        });
    }
}
