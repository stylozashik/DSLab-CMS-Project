<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutOne extends Model
{
    use HasFactory;

    protected $table = 'home_about_ones';

    protected $primaryKey = 'home_about_one_id';

    protected $fillable = [
        'home_about_one_title',
        'home_about_one_description',
    ];
}
