<?php
if (! function_exists('generateLocalizedUrl')) {
    function generateLocalizedUrl($langCode)
    {
        $path = request()->path();
        $segments = explode('/', $path, 2);
        $newPath = isset($segments[1]) ? $segments[1] : '';
        return url($langCode . '/' . $newPath);
    }
}
