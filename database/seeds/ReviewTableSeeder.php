<?php

use Illuminate\Database\Seeder;
use App\Review;
class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Review();
        $review->fname = 'Christina';
        $review->lname = 'B.';
        $review->review = 'I had painful menstrual cramps & within five mins of acupressure my pain was completely gone and i m still in shock, i was skeptical at first but now i am a believer in acupressure. I strongly recommend acupressure for menstrual cramps.';
        $review->verified = true;
        $review->created_at = date_create("2017-01-02");
        $review->updated_at = date_create("2017-01-02");
        $review->save();
        
    }
}
