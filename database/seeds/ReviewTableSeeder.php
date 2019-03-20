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
        $review[0] = new Review();
        $review[0]->fname = 'Christina';
        $review[0]->lname = 'B.';
        $review[0]->review = 'I had painful menstrual cramps & within five mins of acupressure my pain was completely gone and i m still in shock, i was skeptical at first but now i am a believer in acupressure. I strongly recommend acupressure for menstrual cramps.';
        $review[0]->verified = true;
        $review[0]->created_at = date_create("2017-01-02");
        $review[0]->updated_at = date_create("2017-01-02");
        $review[0]->save();
        
        $review[1] = new Review();
        $review[1]->fname = 'Martita ';
        $review[1]->lname = 'R.';
        $review[1]->review = '​I saw Miguel 2 days ago for an ear condition that I’ve had for some time now. There was pressure and fullness in my left ear. It was difficult to hear, but worse when I tried to use the telephone, the person’s voice sounded very muffled every time and I found myself asking them to repeat themselves constantly so I switched the phone to my right ear as I could hear much better. I went to see my doctor regarding this issue but she could not find a problem or solution for me. I spoke to Miguel about my hearing and he offered me an acupressure treatment that could help. During and after the treatment I could feel and notice a change. I will definitely be coming back to Miguel for more treatments.';
        $review[1]->verified = true;
        $review[1]->created_at = date_create("2016-12-10");
        $review[1]->updated_at = date_create("2016-12-10");
        $review[1]->save();
        
        $review[2] = new Review();
        $review[2]->fname = 'Emma';
        $review[2]->lname = 'B.';
        $review[2]->review = '​After only one session of acupuncture I loved it. At first I was nervous and scared of it hurting or not being able to help with my stress, but they were gentle and insured that I knew what acupuncture was and how it would help. It was not painful at all and after about 10 minutes of the needles being in my pain and headache decreased and eventually completely went away. No doubt I am going back for another session and I suggest it to anyone with high levels of stress and anxiety. They did an amazing job and I thank them very much.';
        $review[2]->verified = true;
        $review[2]->created_at = date_create("2016-10-26");
        $review[2]->updated_at = date_create("2016-10-26");
        $review[2]->save();
        
        $review[3] = new Review();
        $review[3]->fname = 'Pauly';
        $review[3]->lname = 'P.';
        $review[3]->review = '​My name is Pauly I came to Miguel for acupressure and he did a good job taking the pain away from my hand and at work I …perform better, then I went back to see Miguel for stress and helped me a lot and relieving stress and again I performed better at work now I see Miguel 3 times a week';
        $review[3]->verified = true;
        $review[3]->created_at = date_create("2016-10-09");
        $review[3]->updated_at = date_create("2016-10-09");
        $review[3]->save();
        
        $review[4] = new Review();
        $review[4]->fname = 'Ivan';
        $review[4]->lname = 'R.';
        $review[4]->review = '​I heard about miguel through a friend. i recently came to the Sacred Light Healing Center for a decreased hearing in my right ear. I called to setup a consultation with miguel he had recommended for me a custom herbal blend after hearing my problem. he kept talking about improving my organs and so he fixed me up a herbal remedy for me to brew at home for the next 5 days. he was also very interested in my nutritional intake and recommended acupressure for the pains on my left forearm using reiki energy over my ear and my arms, it’s been just about 1 week and I have noticed a major improvement. I’m impressed by the knowledge he possesses. I highly believe people with several types of health concerns could benefit from treatments at Sacred Light Healing Center and should give it a try. It’s wonderful to know that there are still genuine people out there who still care about the people Thank you';
        $review[4]->verified = true;
        $review[4]->created_at = date_create("2016-06-14");
        $review[4]->updated_at = date_create("2016-06-14");
        $review[4]->save();
        
        $review[5] = new Review();
        $review[5]->fname = 'Alonso';
        $review[5]->lname = 'R.';
        $review[5]->review = 'Today I had a Reiki session by Martha Rivera. At first i didn’t know what to expect or if I would feel anything but after she put her hands on my head i felt heat all over my head. It was such a relaxing heat that I fell asleep. Once the session was over I felt such a difference, I felt lighter and calm where as before the session all I felt was heaviness and tension.';
        $review[5]->verified = true;
        $review[5]->created_at = date_create("2016-05-14");
        $review[5]->updated_at = date_create("2016-05-14");
        $review[5]->save();
        
        $review[6] = new Review();
        $review[6]->fname = 'Danny';
        $review[6]->lname = 'M.';
        $review[6]->review = 'Hi Im danny a construction worker from toronto and i came for a treatment. i was suffering from sharp pains on my back. he gave me a card at some point and so i called. he sounded like he wanted to help and so i when i went to his herbal clinic at his home office he treated me to some herbal tea that would help reduce pains and inflammation, which was very good its relaxed me, it helped alot. He also used acupressure on me and demonstrated his reiki energy around my back area of pain suddenly warm up. i feel great now and i will come back for more treatments later in the summer. Thanks';
        $review[6]->verified = true;
        $review[6]->created_at = date_create("2016-05-08");
        $review[6]->updated_at = date_create("2016-05-08");
        $review[6]->save();
        
        $review[7] = new Review();
        $review[7]->fname = 'Par';
        $review[7]->lname = 'H.';
        $review[7]->review = '​A very attentive professional. Addressed my concerns and answered my questions. Seems like someone who genuinely wants to help. A great consultation and first impression';
        $review[7]->verified = true;
        $review[7]->created_at = date_create("2016-05-05");
        $review[7]->updated_at = date_create("2016-05-05");
        $review[7]->save();
        
        $review[8] = new Review();
        $review[8]->fname = 'Drew';
        $review[8]->lname = 'R.';
        $review[8]->review = 'Appreciated seeking nutritional advice as well as pain relief, anxiety and depression relief. Good to find a natural alternative. The professional information recieved helped to treat symptoms.';
        $review[8]->verified = true;
        $review[8]->created_at = date_create("2016-04-21");
        $review[8]->updated_at = date_create("2016-04-21");
        $review[8]->save();
        
        
        $review[9] = new Review();
        $review[9]->fname = 'Betsy';
        $review[9]->lname = 'B.';
        $review[9]->review = 'The best healers do not have the letters M.D. after their name. Natural healing is the best. Balance. Yin/Yang. Thoughts, words spoken, your emotions can bless you or cures you. It’s up to you.';
        $review[9]->verified = true;
        $review[9]->created_at = date_create("2015-08-13");
        $review[9]->updated_at = date_create("2015-08-13");
        $review[9]->save();
        
    }
}
