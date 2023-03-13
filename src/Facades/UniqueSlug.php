<?php

namespace Minhaz\LaravelUniqueSlug\Facades;

/**
 * @see \Minhaz\LaravelUniqueSlug\UniqueSlug
 */


class UniqueSlug extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-unique-slug';
    }
}
