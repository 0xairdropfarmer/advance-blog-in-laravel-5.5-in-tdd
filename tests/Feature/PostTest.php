<?php

namespace Tests\Feature;

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
    public function test_a_guset_can_access_blog_index()
    {
        $post = factory('App\Post')->create();
        $response = $this->get('/blog');
        $response->assertSee($post->title);
    }
    public function test_a_guest_can_see_single_post(){
        // giving post data
        $post = factory('App\Post')->create();
        // when guest access blog/{id}
        $response = $this->get('/blog/'.$post->id);
        // expect to see post title
        $response->assertSee($post->title);
    }
    public function test_guest_can_see_comment_when_visit_single_post(){
        // Given a Post
        $post = factory('App\Post')->create();
        // and Post have comments
        $comment = factory('App\Comment')->create(['post_id'=>$post->id]);
        // then I visit single post page
        $response = $this->get('blog/'.$post->id);
        // I’ve see the comment
        $response->assertSee($comment->body);
    }
}
