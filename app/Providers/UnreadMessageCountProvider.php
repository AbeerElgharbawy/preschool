<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class UnreadMessageCountProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('admin.includes.navbar', function ($view) {
        $unreadCount = Contact::where('unread', 0)->count();
        $view->with('unreadCount', $unreadCount);
        });
    }
}
