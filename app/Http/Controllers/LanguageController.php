<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class LanguageController extends Controller
{
    /**
     * @param string $locale
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(string $locale, Request $request): RedirectResponse
    {
        session()->put('app_locale', $locale);

        return back();
    }
}
