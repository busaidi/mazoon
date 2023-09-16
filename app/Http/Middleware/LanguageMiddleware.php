<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if there's a language stored in the session
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        } else {
            // If not, then use the URL's segment to determine the locale
            $locale = $request->segment(1);

            if (in_array($locale, ['en', 'ar'])) {
                App::setLocale($locale);
            } else {
                App::setLocale(config('app.fallback_locale'));
            }
        }

        return $next($request);
    }
}
