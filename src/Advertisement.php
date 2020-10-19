<?php

namespace App;

class Advertisement extends Post
{
    public $title;
    public $relevance_level;
    /**
     * The relevance could be
     * low, medium and high
     * just for example
     */

    public function __construct($date, $relevance_level)
    {
        parent::__construct($date);
        $this->relevance_level = $relevance_level;
    }
}
