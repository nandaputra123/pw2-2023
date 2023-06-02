<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'id' => '1',
            'movie' => 'Qodrat',
            'user' => 'Charles Gozali',
            'rating' => '8.6',
            'tanggal' => '27-11-2022',
            'comment' => 'Sangat sangat menegangkan'
        ]);
        Review::create([
            'id' => '2',
            'movie' => 'Miracle in Cell No. 7',
            'user' => 'Hanung Bramantyo',
            'rating' => '8.4',
            'tanggal' => '8-10-2022',
            'comment' => 'Mengharukan',
        ]);
        Review::create([
            'id' => '3',
            'movie' => 'Mencuri Raden Saleh',
            'user' => '	Angga Dwimas Sasongko',
            'rating' => '8.3',
            'tanggal' => '02-06-2022',
            'comment' => 'Menengangkan dan sangat bagus',
        ]);
        Review::create([
            'id' => '4',
            'movie' => 'KKN di Desa Penari',
            'user' => 'Awi Suryadi',
            'rating' => '9.0',
            'tanggal' => '30-04-2022',
            'comment' => 'Sangat berkesan untuk yang suka horor',
        ]);
        Review::create([
            'id' => '5',
            'movie' => 'Jakarta vs Everybody',
            'user' => 'Arief Rahman',
            'rating' => '8.8',
            'tanggal' => '17-03-2022',
            'comment' => 'Dom ditampar oleh kehidupan bahwa untuk mewujudkan impian nggak cukup hanya sekadar niat saja. Dia harus siap jatuh sampai terlibat dalam dunia hitam, yaitu industri perdagangan narkoba.',
        ]);
        
    }
}

