<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('*', function ($view) {
            // Verifica se o usuário está autenticado antes de acessá-lo
            $user = Auth::user();

            // Passa o usuário para todas as views
            $view->with('user', $user);
        });
    }
}
