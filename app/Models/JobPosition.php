<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;
    protected $table = 'job_position';

    protected $fillable = [
        'title',
        'location',
        'description',
        'closing_date',
        'announcement_date',
        'requirements',
        'status',
        'quota',
    ];


}
