<?php

namespace App\Providers;

use App\Events\PostCreated;
use App\Listeners\SendNotifyToUser;
use App\Listeners\SendSmsToMail;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event; // Added correct import
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        // You can bind services here
        return [
            Post::class => PostPolicy::class,
        ];
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFour(); // Use Bootstrap 4 for pagination
        Event::listen(
            PostCreated::class,
            SendSmsToMail::class,

        );
        Event::listen(
            PostCreated::class,
            SendNotifyToUser::class
        );
        // Define Gates for Post authorization
        // Gate::define('update-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });

        // Gate::define('delete-post', function (User $user, Post $post) {
        //     return $user->id === $post->user_id;
        // });
        view()->composer('partials.header', function ($view) {
            $view->with('locale', App::currentLocale());
            $view->with('all_locales', config('app.all_locales'));
        });
    }
}
