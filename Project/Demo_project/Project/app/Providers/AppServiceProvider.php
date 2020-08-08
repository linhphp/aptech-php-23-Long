<?php

namespace App\Providers;
use App\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

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
        Builder::defaultStringLength(191);

        view()->composer('header',function($view)
        {
            $loaisp = Product::all();
            if(Session('cart')){
                $oldCart = session::get('cart');
                $cart = new Cart($oldCart);
            }
            $view->with(['loaisp',$loaisp, 'cart'=>Session::get('cart'),'product_cart'=>
            $cart->products,'totalPrice'=>$cart->totalPrice,'totalQuanty'=>$cart->totalQuanty]);
        });
    }
}
