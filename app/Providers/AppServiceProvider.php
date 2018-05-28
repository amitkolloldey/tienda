<?php

namespace App\Providers;

use App\Product;
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

        $this->overallMinPrice();

        $this->overallMaxPrice();
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

    public function overallMinPrice()
    {
        view()->composer('front.partials.shopsidebar', function ($view) {
            $view->with('overall_min_price', Product::min('price'));
        });
    }

    public function overallMaxPrice()
    {
        view()->composer('front.partials.shopsidebar', function ($view) {
            $view->with('overall_max_price', Product::max('price'));
        });
    }
}
