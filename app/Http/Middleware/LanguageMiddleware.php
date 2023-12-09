<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $locale = session()->get('locale', null);
        $localeFromUrl = $request->segment(1);

        if (in_array($localeFromUrl, ['en', 'ar'])) {
            // If the URL has a valid locale, use it and update the session
            App::setLocale($localeFromUrl);
            session()->put('locale', $localeFromUrl);
        } elseif ($locale) {
            // If no valid locale in the URL, but session has locale, use it
            App::setLocale($locale);
        } else {
            // If no valid locale found, fall back to the default
            App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
