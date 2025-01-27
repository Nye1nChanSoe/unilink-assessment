<?php

namespace App\Providers;

use App\Models\BlogPost;
use App\Observers\BlogPostObserver;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // disable the wrapping: data {}
        JsonResource::withoutWrapping();
        BlogPost::observe(BlogPostObserver::class);
    }
}
