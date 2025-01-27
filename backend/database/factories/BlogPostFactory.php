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
            'content_html' => <<<HTML
                <article>
                <h1>{$this->faker->sentence(6)}</h1>
                <p>{$this->faker->paragraph()}</p>
                <img src="https://placehold.co/800x400" alt="Random Image">
                <h2>{$this->faker->sentence(4)}</h2>
                <p>{$this->faker->paragraph()}</p>
                <ul>
                    <li>{$this->faker->sentence(3)}</li>
                    <li>{$this->faker->sentence(3)}</li>
                    <li>{$this->faker->sentence(3)}</li>
                </ul>
                <blockquote>"{$this->faker->sentence(8)}"</blockquote>
                <footer>
                    <p>By {$this->faker->name()}, {$this->faker->jobTitle()}</p>
                </footer>
                </article>
                HTML,
            'hero_image' => $this->faker->imageUrl(800, 400, 'nature', true, 'Blog Hero'),
            'author_id' => Author::factory(),
            'published_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format(DateTime::ATOM),
        ];
    }
}
