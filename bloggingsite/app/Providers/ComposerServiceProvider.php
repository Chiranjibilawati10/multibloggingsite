<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //providing view to meta_dynamic with all blog instances
        View::composer('partials.meta_dynamic', function($view){
            $view->with('blog',Blog::all());
        });
    }
}
