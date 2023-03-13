<?php

namespace Minhaz\LaravelUniqueSlug;


class UniqueSlugServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-unique-slug.php' => config_path('laravel-unique-slug.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('laravel-unique-slug', function () {
            return new \Minhaz\LaravelUniqueSlug\UniqueSlug();
        });

        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-unique-slug.php',
            'laravel-unique-slug'
        );
    }
}
