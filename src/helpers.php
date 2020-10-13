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
