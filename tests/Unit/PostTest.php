<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_post_can_add_a_comments()
    {
        //Giving a Post
        $post = factory('App\Post')->create();
        // Add a comemnt
        $post->storeComment([
                'body'=>'Testing',
                'user_id'=>1
        ]);
        // Then post should have comment
        $this->assertCount(1,$post->comment);
    }
    function test_post_has_a_creator()
    {
        // Giving post 
        $post = factory('App\Post')->create();
        // expect found User who create post
        $this->assertInstanceOf('App\User', $post->creator);
    }
}
