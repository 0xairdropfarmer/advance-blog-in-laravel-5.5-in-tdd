<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubmitCommentTest extends TestCase
{
    use RefreshDatabase;
    function guest_can_not_submit_comment(){
       // Given a Guest
          $guest = factory('App\User')->create();
         // And Post is exist
         $post = factory('App\Post')->create();
         // And Giving comment object 
         $comment = factory('App\Comment')->make();
         // When the user submit comment to the post
        $this->post('/blog/'.$post->id.'/comment',$comment->toArray());
        // expect exception thrown
        $this->expectException('Illuminate\Auth\AuthenticationException');
    }
   public function test_user_can_submit_comment(){
         // Given a Guest
          $guest = factory('App\User')->create();
          // create Authenticate user 
         $user = $this->be($guest);
         // And Post is exist
         $post = factory('App\Post')->create();
         // And Giving comment object 
         $comment = factory('App\Comment')->make();
         // When the user submit comment to the post
        $this->post('/blog/'.$post->id.'/comment',$comment->toArray());
         // Then their should see comment
        // $this->assertDatabaseHas('comments',['body'=>$comment->body]);
          $this->get('/blog/'.$post->id)->assertSee($comment->body);

   }
}
