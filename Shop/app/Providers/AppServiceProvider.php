<?php

namespace App\Providers;

use App\Category;
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
        view()->composer('page.header',function($view){
            $loai_sp = Category::all();
            
            $view->with('loai_sp',$loai_sp);
        });

        view()->composer('page.footer',function($view){
            $category = Category::paginate(5);
            
            $view->with('category',$category);
        });
    }
}
