<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Movie;
use App\Models\Actor;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Movie::create([ // Use the 'Movie' class to create a new movie
                'title' => $faker->name,
                'image' => $faker->imageUrl(200, 300, 'people'),
                'release_year' => $faker->date('Y'),
            ]);
        }
        $actors = Actor::all();
        $movies = Movie::all();

        // Assignar aleatòriament actors a pel·lícules
        foreach ($movies as $movie) {
            // Crear una llista aleatòria d'IDs d'actors
            $actorIds = $actors->random(rand(1, 5))->pluck('id');

            // Associar actors amb la pel·lícula
            $movie->actors()->syncWithoutDetaching($actorIds);
        }
    }
}
