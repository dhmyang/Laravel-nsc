<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <50; $i++){
            $review = new Review();
            $review->name = $faker->name();
            $review->email = $faker->email();
            $review->star = $faker->numberBetween(1, 5);
            $review->message = $faker->text(150);
            $review->save();
        }
    }
}
