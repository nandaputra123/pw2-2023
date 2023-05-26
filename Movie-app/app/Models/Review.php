<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $reviews =[
        [
            'no' => 1,
            'movie' => 'Tentangmu',
            'user' => 'Putra Ananda',
            'rating' => 8.5,
            'comment' => 'Perjalanan cinta yang tak perna terbalaskan',
        ],
        [
            'no' => 2,
            'movie' => 'Hadirmu',
            'user' => 'Prasetyo',
            'rating' => 8.9,
            'comment' => 'It is perfect',
        ],
        [
            'no' => 3,
            'movie' => 'Kehidupanmu',
            'user' => 'Tio Wibowo',
            'rating' => 8.5,
            'comment' => 'Tentang aku yang ingin ada disisimu',
        ],
        [
            'no' => 4,
            'movie' => 'Rasa ini',
            'user' => 'Nanda Putra',
            'rating' => 9.5,
            'comment' => 'Sangat sangat pahit',
        ],
        [
            'no' => 5,
            'movie' => 'Hidupku ada untukmu',
            'user' => 'Nanda Putra Wibowo',
            'rating' => 9.5,
            'comment' => 'Khusus uuntuk jomblo',
        ],
    ];

    public function getAllReviews()
    {
        return$this->reviews;
    }
}
