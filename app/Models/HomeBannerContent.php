<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBannerContent extends Model
{
    use HasFactory;

    protected $table = 'home_banner_content_table';

    protected $primaryKey = 'home_banner_content_id';

    protected $fillable = [
        'home_banner_content_title_up',
        'home_banner_content_title_middle',
        'home_banner_content_title_down',
        'home_banner_content_subtitle',
    ];
}
