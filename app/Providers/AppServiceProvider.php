<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\Content\Comment;
use App\Models\Market\CartItem;
use App\Models\Setting\Setting;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
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
        view()->composer('admin.layouts.header', function ($view) {
            $view->with('unseenComments', Comment::where('seen', 0)->get());
            $view->with('notifications', Notification::where('read_at', null)->get());
        });

        view()->composer('customer.layouts.header', function ($view) {
            $view->with('settings', Setting::first());
            if (Auth::check()) {
                $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
                $view->with('cartItems', $cartItems);
            }
        });

        view()->composer('customer.layouts.head-tag', function ($view) {
            $view->with('settings', Setting::first());
        });
    }
}
