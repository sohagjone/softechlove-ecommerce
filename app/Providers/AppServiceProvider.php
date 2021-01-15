<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\support\Facades\Schema;
use Illuminate\support\Facades\View;
use App\Category;
Use Cart;

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
       Schema::defaultStringLength(191);
       //view::share('all_categories', Category::where('publication_status', 1)->get());

       View::composer('*', function($view){
           $view->with('all_categories', Category::where('publication_status', 1)->get()); 
           $view->with('CartGetContents', Cart::getContent()); 
           $view->with('getTotalQuantity', Cart::getTotalQuantity());
           $view->with('getSubTotal', Cart::getSubTotal());
       });
    }
}
