<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Cegah Penyakit TBC',
            'slug' => 'cegah-penyakit-tbc',
        ]);

        Category::create([
            'name' => 'Diagnoisis Penyakit TBC',
            'slug' => 'diagnoisis-penyakit-tbc',
        ]);

        Category::create([
            'name' => 'Pengobatan',
            'slug' => 'pengobatan',
        ]);
        Category::create([
            'name' => 'Kasus Penyakit TBC',
            'slug' => 'kasus-penyakit-tbc',
        ]);
        Category::create([
            'name' => 'Penyakit TBC',
            'slug' => 'penyakit-tbc',
        ]);



        post::factory(20)->create();

        user::factory(10)->create();

        admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' => now(),

        ]);
    }
}
