<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([[
            'question' => 'You find it takes effort to introduce yourself to other people.',
            'dimension' => 'EI',
            'direction' => 1,
            'meaning' => 'I',
        ], [
            'question' => 'You consider yourself more practical than creative.',
            'dimension' => 'SN',
            'direction' => -1,
            'meaning' => 'S',
        ], [
            'question' => 'Winning a debate matters less to you than making sure no one gets upset.',
            'dimension' => 'TF',
            'direction' => 1,
            'meaning' => 'F',
        ], [
            'question' => 'You get energized going to social events that involve many interactions.',
            'dimension' => 'EI',
            'direction' => -1,
            'meaning' => 'E',
        ], [
            'question' => 'You often spend time exploring unrealistic and impractical yet intriguing ideas.',
            'dimension' => 'SN',
            'direction' => 1,
            'meaning' => 'N',
        ], [
            'question' => 'Deadlines seem to you to be of relative rather than absolute importance.',
            'dimension' => 'JP',
            'direction' => 1,
            'meaning' => 'P',
        ], [
            'question' => 'Logic is usually more important than heart when it comes to making important decisions.',
            'dimension' => 'TF',
            'direction' => -1,
            'meaning' => 'T',
        ], [
            'question' => 'Your home and work environments are quite tidy.',
            'dimension' => 'JP',
            'direction' => -1,
            'meaning' => 'J',
        ], [
            'question' => 'You do not mind being at the center of attention.',
            'dimension' => 'EI',
            'direction' => -1,
            'meaning' => 'E',
        ], [
            'question' => 'Keeping your options open is more important than having a to-do list.',
            'dimension' => 'JP',
            'direction' => 1,
            'meaning' => 'P',
        ]]);
    }
}
