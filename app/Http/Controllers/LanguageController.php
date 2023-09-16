<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($lang)
    {
        if (in_array($lang, ['en', 'ar'])) {
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
