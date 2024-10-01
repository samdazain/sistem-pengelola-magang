<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    // Nama tabel yang terkait
    protected $table = 'evaluation';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'user_id',
        'discipline',
        'cooperation',
        'responsibility',
        'initiative',
        'communication',
        'duration_period',
        'certificate',
    ];
}
