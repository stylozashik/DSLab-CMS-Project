<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBannerImage extends Model
{
    use HasFactory;

    protected $table = 'home_banner_image_table';
    protected $primaryKey = 'home_banner_image_id';

    protected $fillable = [
        'home_banner_image_url',
    ];
}
