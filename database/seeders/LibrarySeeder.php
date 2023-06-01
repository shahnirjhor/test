<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('libraries')->insert([
                'title' => $faker->sentence(5),
                'categories' => $faker->randomElement(['whats-new-on-leap-frog', 'news', 'articles', 'events', 'technical-publication-and-case-studies']),
                'image' => $faker->imageUrl(),
                'description' => $faker->paragraph(3),
                'seo' => json_encode([
                    'title' => $faker->sentence(6),
                    'description' => $faker->paragraph(2),
                    'keywords' => $faker->words(5, true)
                ]),
                'event_date' => $faker->dateTimeBetween('+1 week', '+1 month')->format('Y-m-d'),
                'event_venue' => $faker->address(),
                'brochure' => $faker->boolean(50) ? $faker->url : null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
