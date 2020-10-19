<?php

namespace App;

class Author extends User
{
    protected $posts = [];

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function countPosts()
    {
        return count($this->posts);
    }

    public function getPosts()
    {
        return $this->posts;
    }
}
