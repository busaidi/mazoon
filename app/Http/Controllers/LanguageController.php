<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{

    public function switch(string $lang): RedirectResponse
    {
        if (in_array($lang, ['en', 'ar'])) {
            session()->put('locale', $lang);

            // Capture the previous URL
            $previousUrl = url()->previous();
            $segments = parse_url($previousUrl, PHP_URL_PATH);
            $parts = explode('/', $segments);

            // Check if the second segment is either 'en' or 'ar'
            if (isset($parts[1]) && in_array($parts[1], ['en', 'ar'])) {
                // Replace the previous locale with the new locale
                $parts[1] = $lang;
                $newUrl = implode('/', $parts);
                return redirect($newUrl);
            }
        }

        return redirect($lang);
    }
}
