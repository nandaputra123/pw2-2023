<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    protected $genres = [
        [
            'no' => 1,
            'nama genre' => 'Genre Dokumenter',
            'deskripsi' => 'Berbeda dengan genre lainnya, yang umumnya bersifat fiksi. Genre dokumenter menceritakan hal yang bersifat non fiksi, artinya, terdapat kisah yang nyata dan benar yang terjadi sebelumnya, dan di filmkan.',
        ],
        [
            'no' => 2,
            'nama genre' => 'Genre Animasi',
            'deskripsi' => 'Sesuai dengan namanya genre animasi berarti kisah dan tokoh yang terdapat dalam film, tidak bertindak sesuai dengan keinginan aktor dan artisnya. Adegan, latar, tokoh tercipta dari suatu animasi yang digambar oleh produser.',
        ],
        [
            'no' => 3,
            'nama genre' => 'Genre Horor',
            'deskripsi' => 'Jika anda menginginkan film yang dapat menciptakan rasa takut, maka genre horor adalah pilihan yang tepat. Genre horor sering diasosiakan dengan kisah yang memiliki atau menceritakan tokoh dan pertemuannya dengan hantu, meskipun tidak selalu, namun hantu seringkali dapat menciptakan rasa takut bagi penonton.',
        ],
        [
            'no' => 4,
            'nama genre' => 'Genre Komedi',
            'deskripsi' => 'Genre komedi menciptakan sebuah cerita yang lucu dan dapat membuat penonton tertawa. Dalam genre film ini, penonton dapat tertawa baik dari adegan tokoh, percakapan, atau alur ceritanya.',
        ],
        [
            'no' => 5,
            'nama genre' => 'Genre Romantis',
            'deskripsi' => 'Sesuai namanya, genre romance menceritakan kisah cinta yang tercipta di antara para tokoh. Bagaimana cintanya dapat terbangun, dan bagaimana para tokoh menyelesaikan masalah yang ada, genre romance dapat membuat para penonton ikut bahagia atau sedih, tergantung pada akhir film yang dibuat.',
        ],
        
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
