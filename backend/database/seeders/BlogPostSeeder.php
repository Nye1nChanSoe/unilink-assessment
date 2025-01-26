<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\BlogPost;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate tags
        $tags = Tag::factory(10)->create();

        // Generate authors and their blog posts
        Author::factory(5)
            ->has(
                BlogPost::factory(5)
                    ->afterCreating(function (BlogPost $post) use ($tags) {
                        // Attach random tags to the post
                        $post->tags()->attach($tags->random(rand(2, 5)));
                    })
            )
            ->create();
    }
}
