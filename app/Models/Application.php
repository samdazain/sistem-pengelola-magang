<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

      // Nama tabel yang terkait
      protected $table = 'application';

      // Kolom yang bisa diisi secara massal
      protected $fillable = [
          'job_position_id',
          'user_id',
          'status',
          'portfolio_link',
      ];
}
