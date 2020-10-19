<?php

namespace App;

class Post
{
    protected $comments = [];
    public $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function addComment(Comment $comment)
    /**
     * Comment is accepted because of
     * namespace App, and there is
     * Comment and Post together
     */
    {
        $this->comments[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }
}
