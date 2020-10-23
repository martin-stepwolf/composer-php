<?php

/**
 * if the function exist
 * it is not loaded
 * again
 */
if (!function_exists('upper')) {
    function upper($value)
    {
        return Text\Format::upperText($value);
    }
}

if (!function_exists('lower')) {
    function lower($value)
    {
        return Text\Format::lowerText($value);
    }
}

if (!function_exists('view')) {
    function view($view)
    {
        return new App\Http\Response($view);
    }
}

if (!function_exists('viewPath')) {
    function viewPath($view)
    {
        return __DIR__ . "/../views/$view.php";
    }
}
