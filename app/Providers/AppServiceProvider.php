<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ShoppingCart;
use Session;

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
        //VARIABLES DE SESION GLOBALES
        
        View::composer('*', function($view){
            $sessionName= 'shopping_cart_id';
            $shopping_cart_id = Session::get($sessionName);
            //dd($shopping_cart);
    
            $shopping_cart = ShoppingCart::findOrCreateById($shopping_cart_id);
    
            Session::put($sessionName, $shopping_cart->id);

            $view->with('productsCount', $shopping_cart->productsCount());
        });
        
    }
}
