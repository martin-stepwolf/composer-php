<?php

use PHPUnit\Framework\TestCase;
use App\{Post, Comment, Author, Advertisement};

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post("2020-10-18");
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }

    public function test_add_advertisement_to_author()
    {
        $advertisement = new Advertisement("2020-10-18", "High");
        // 
        $author = new Author("martin", "martin@gmail.com");

        $author->addPost($advertisement);

        $this->assertEquals(1, $author->countPosts());
        $this->assertInstanceOf(Post::class, $author->getPosts()[0]);
    }
}
