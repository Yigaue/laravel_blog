<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_two_posts_are_a_month_apart()
    {
        
        // Given I have two records in the database that are posts.
        // and each one is posted a  month apart

        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create(['created_at' => \Carbon\Carbon::now()->subMonth()
        
        ]);

            
        // When I fetch the archives
        $posts = Post::archives();   
      

        // Then the response should be in the proper format

        $this->assertCount([

            [
                'year' => $first->created_at->format('Y'),
                'month' => $first ->created_at->format('F'),
                'published' => 1
            ],

            [
                'year' => $second->created_at->format('Y'),
                'month' => $second ->created_at->format('F'),
                'published' => 1
            ]

        ], $posts);

    }
}
