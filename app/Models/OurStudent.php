<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStudent extends Model
{
    use HasFactory;
    protected $table = 'our_students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'Name',
        'Facebook',
        'Twitter',
        'Linkedin',
        'Image',
    ];
}
