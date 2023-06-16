<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Qodrat',
            'user' => 'Charles Gozali',
            'rating' => '8.6',
            'review' => 'Sangat sangat menegangkan',
            'tahun' => '2022-11-27',

        ]);

        Review::create([
            'film' => 'Miracle in Cell No. 7',
            'user' => 'Hanung Bramantyo',
            'rating' => '8.6',
            'review' => 'Mengharukan',
            'tahun' => '2022-10-08',

        ]);

        Review::create([
            'film' => 'Mencuri Raden Saleh',
            'user' => 'Angga Dwimas Sasongko',
            'rating' => '8.5',
            'review' => 'Menengangkan dan sangat bagus',
            'tahun' => '2022-06-02',

        ]);

        Review::create([
            'film' => 'KKN di Desa Penari',
            'user' => 'Awi Suryadi',
            'rating' => '9.0',
            'review' => 'Sangat berkesan untuk yang suka horor',
            'tahun' => '2022-04-30',

        ]);

        Review::create([
            'film' => 'Jakarta vs Everybody',
            'user' => 'Arief Rahman',
            'rating' => '9.8',
            'review' => 'Dom ditampar oleh kehidupan bahwa untuk mewujudkan impian nggak cukup hanya sekadar niat saja. Dia harus siap jatuh sampai terlibat dalam dunia hitam,
            yaitu industri perdagangan narkoba.',
            'tahun' => '2022-03-17',

        ]);
    }
}
