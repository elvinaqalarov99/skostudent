<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class SetLanguage
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param Request $request
     * @param Closure $next
     * @return string|null
     * @throws BindingResolutionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('app_locale')) {
            $locale = session()->get('app_locale');
        } else {
//            $locale = match ($request->headers->get('cf-ipcountry')) {
//                'AZ' => 'az',
//                default => 'en'
//            };
            $locale = config('app.locale');
        }

        if (!in_array($locale, config('app.locales'))) {
            $locale = config('app.locale');
        }

        app()->setLocale($locale);
        Carbon::setLocale($locale);

        return $next($request);
    }
}
