<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Movie::create([
            'judul' => 'The Shawshank Redeption',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'UAS',
            'tahun' => '1994',
            'rating' => '9.8'
       ]);

       Movie::create([
        'judul' => 'The Gofather',
        'poster' => 'image.png',
        'genre_id' => 3,
        'negara' => 'USA',
        'tahun' => '1972',
        'rating' => '8.8'
   ]);

   Movie::create([
     'judul' => 'WkwkwkFilm',
     'poster' => 'image.png',
     'genre_id' => 4,
     'negara' => 'Konoha',
     'tahun' => '2021',
     'rating' => '8.8'
]);

Movie::create([
     'judul' => 'Drama Gedung Politikus',
     'poster' => 'image.png',
     'genre_id' => 5,
     'negara' => 'PLUS 62',
     'tahun' => '2022',
     'rating' => '8.9'
]);

     
    }
}
