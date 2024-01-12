<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Actor;
class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Actor::create([ // Use the 'Actor' class
                'name' => $faker->name,
                'image' => $faker->imageUrl(200, 300, 'people'),
                'birth_date' => $faker->date
            ]);
        }
    }
}
