<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeacher extends Model
{
    use HasFactory;
    protected $table = 'our_teachers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'Name',
        'Designation',
        'Facebook',
        'Twitter',
        'Linkedin',
        'Image',
    ];
}
