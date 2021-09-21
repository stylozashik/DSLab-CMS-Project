<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutTwo extends Model
{
    use HasFactory;
    protected $table = 'home_about_twos';

    protected $primaryKey = 'home_about_two_id';

    protected $fillable = [
        'home_about_two_title',
        'home_about_two_description',
    ];
}
