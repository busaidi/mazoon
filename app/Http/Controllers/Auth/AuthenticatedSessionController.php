<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */

    public function getSEOInfo($page)
    {
        return [
            'description' => __($page . '.description'),
            'keywords' => __($page . '.keywords'),
        ];
    }

    public function create(): View
    {
        $seoInfo = $this->getSEOInfo('login');
        return view('auth.login',$seoInfo);
    }

    /**
     * Handle an incoming authentication request.
     * @throws ValidationException
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

//        $locale = app()->getLocale(); // Get the current locale
//        return redirect()->intended(route('/about', ['locale' => $locale]));
        return redirect()->intended(RouteServiceProvider::HOME . '?locale=' . App::getLocale());
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request, $locale): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $locale = app()->getLocale(); // Get the current locale
        /*return redirect(route('login', ['locale' => $locale]));*/
        return redirect()->intended(RouteServiceProvider::HOME . '?locale=' . App::getLocale());


    }

}
