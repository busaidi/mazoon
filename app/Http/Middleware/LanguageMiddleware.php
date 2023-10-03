<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class LanguageMiddleware
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = session()->get('locale', null);

        if ($locale) {
            App::setLocale($locale);
        } else {
            $localeFromUrl = $request->segment(1);

            if (in_array($localeFromUrl, ['en', 'ar'])) {
                App::setLocale($localeFromUrl);
            } else {
                App::setLocale(config('app.fallback_locale'));
            }
        }

        return $next($request);
    }
}
