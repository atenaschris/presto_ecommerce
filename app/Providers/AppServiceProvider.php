<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
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
      $categories = Category::all();
      View::share('categories', $categories);

      $defaultLangBrowser = Request::server('HTTP_ACCEPT_LANGUAGE');

      $dividedLang = substr($defaultLangBrowser, 0, 2);
      
      
      App::setLocale($dividedLang);



    }
}
