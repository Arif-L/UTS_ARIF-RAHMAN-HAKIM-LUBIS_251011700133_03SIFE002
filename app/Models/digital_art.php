<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class digital_art extends Model
{
    //

    use HasFactory;

    protected $table = 'digital_arts';

    protected $fillable = [
        'title',
        'artist',
        'resolution',
        'price',
        'image',
        'software_used'
    ];

}
