<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
      if(Schema::hasTable('categories')){

        $categories = Category::all();
        View::share('categories', $categories);
      }

      $defaultLangBrowser = Request::server('HTTP_ACCEPT_LANGUAGE');
      
      $dividedLang = substr($defaultLangBrowser, 0, 2);
      
      

      $flag= "";
      if($dividedLang == 'en'){
        $flag = "gb";
      }else {
        $flag = $dividedLang;
      }
      View::share(compact('flag','dividedLang'));






    }
}
