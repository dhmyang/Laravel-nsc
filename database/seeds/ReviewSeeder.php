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
        for ($i = 1; $i <200; $i++){
            $review = new Review();
            $review->name = 'Review' . $i;
            $review->email = 'testmail' . $i .'@mail.nl';
            $review->star = 5;
            $review->message = 'Lekker gegeten';
            $review->save();
        }
    }
}
