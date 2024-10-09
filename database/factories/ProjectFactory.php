<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake() -> word(5),
            'description' => htmlspecialchars(fake() -> randomHtml()),
            'end_at'=> fake() -> dateTimeBetween('now', '+3 days'),
            'status'=> fake()->randomElement(['open', 'closed']),
            'tech_stack'=> fake()->randomElement(['php', 'laravel', 'javascript', 'react', 'vue', 'angular', 'html', 'css', 'tailwind', 'bootstrap', 'sql', 'mongodb', 'postgresql', 'mysql', 'git', 'github', 'gitlab', 'bitbucket', 'aws', 'digitalocean']),
            'created_by'=> User::factory(),
            
        ];
    }
}
