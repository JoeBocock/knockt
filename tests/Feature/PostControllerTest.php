<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the controller can index Posts.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_indexed()
    {
        $posts = Post::factory(10)->create();

        $this->getJson(route('posts.index'))
            ->assertOk()
            ->assertExactJson($posts->toArray());
    }

    /**
     * Test the controller can store Posts.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_stored()
    {
        $storeData = Post::factory()->raw();

        $response = $this->postJson(route('posts.store'), $storeData);

        $post = collect(Post::first()->toArray())
            ->except(['deleted_at'])
            ->toArray();

        $response->assertCreated()
            ->assertExactJson(array_merge(
                $post,
                $storeData
            ));
    }

    /**
     * Test the controller can show Posts.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_shown()
    {
        $post = Post::factory()->create();

        $this->getJson(route('posts.show', ['post' => $post->id]))
            ->assertOk()
            ->assertExactJson($post->toArray());
    }

    /**
     * Test the controller can update Posts.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_updated()
    {
        $post = Post::factory()->create();

        $patchData = collect(Post::factory()->raw())
            ->only(['title', 'content'])
            ->toArray();

        $response = $this->patchJson(
            route('posts.update', ['post' => $post->id]),
            $patchData
        );

        $response->assertOk()
            ->assertExactJson(array_merge(
                $post->toArray(),
                $patchData
            ));
    }

    /**
     * Test the controller can destroy Posts.
     *
     * @test
     *
     * @return void
     */
    public function it_can_be_destroyed()
    {
        $post = Post::factory()->create();

        $this->deleteJson(route('posts.destroy', ['post' => $post->id]))
            ->assertNoContent();
    }
}
