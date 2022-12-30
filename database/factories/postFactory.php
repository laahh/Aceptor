<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tittel' => $this->faker->sentence(), //membuat data judul random dengan faker,sentence adalah method yang ada di faker untuk membuat kalimat
            'slug' => $this->faker->slug(), //membuat data slug random dengan faker,slug adalah method yang ada di faker untuk membuat slug
            'excerpt' => $this->faker->paragraph(), //membuat data excerpt random dengan faker,paragraph adalah method yang ada di faker untuk membuat paragraf
            //membuat paragraf dengan tag p
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(5)) . '</p>', //membuat data body random dengan faker,paragraphs adalah method yang ada di faker untuk membuat paragraf
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''), //membuat data body random dengan faker,paragraphs adalah method yang ada di faker untuk membuat paragraf
            // 'body' => $this->faker->paragraph(),
            'category_id' => mt_rand(1, 2) //membuat data category_id random dengan faker,mt_rand adalah method yang ada di faker untuk membuat angka random
            //membuat data user_id random dengan faker,mt_rand adalah method yang ada di faker untuk membuat angka random
        ];
    }
}
