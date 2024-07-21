<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * testing can create post
     */
    public function test_can_create_post(){
        $response = $this->post('/posts', [
            'title' => 'Test Title',
            'content' => 'Test Content',
        ]);
    
        $response->assertStatus(302); // Redirect status
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Title'
        ]);
    }

    /**
     * testing can show post
     */
    public function test_can_show_post()
    {
        $post = Post::factory()->create();

        $response = $this->get('/posts/' . $post->id);

        $response->assertStatus(200);
        $response->assertSee($post->title);
    }



    /**
     * testing can update post
     */
    public function test_can_update_post()
    {
        $post = Post::factory()->create();
    
        $response = $this->put('/posts/' . $post->id, [
            'title' => 'Updated Title',
            'content' => 'Updated Content',
        ]);
    
        $response->assertStatus(302); // Redirect status
        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Updated Title'
        ]);
    }

    /**
     * testing can delete post
     */
    public function test_can_delete_post()
    {
        $post = Post::factory()->create();
    
        $response = $this->delete('/posts/' . $post->id);
    
        $response->assertStatus(302); // Redirect status
        $this->assertDatabaseMissing('posts', [
            'id' => $post->id
        ]);
    }
























    

}
