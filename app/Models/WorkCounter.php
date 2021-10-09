<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkCounter extends Model
{
    use HasFactory;
    protected $table = 'work_counters';
    protected $primaryKey = 'id';

    protected $fillable = [
        'collaboration',
        'team',
        'publication',
        'awards',
    ];
}
