<?php

namespace Text; // the same name like in composer.json

class Format //the same name like the file
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value)
    {
        return strtolower($value);
    }
}
