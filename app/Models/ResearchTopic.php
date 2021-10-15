<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchTopic extends Model
{
    use HasFactory;
    protected $table = 'research_topics';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'image',
        'short_description',
        'link',
    ];
}
