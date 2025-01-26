<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\BlogPost;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence,
            'content_html' => $this->faker->randomHtml(2, 4),
            'hero_image' => $this->faker->imageUrl(800, 400, 'nature', true, 'Blog Hero'),
            'author_id' => Author::factory(),
            'published_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format(DateTime::ATOM),
        ];
    }
}
