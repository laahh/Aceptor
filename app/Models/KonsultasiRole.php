<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiRole extends Model
{
    use HasFactory;
    protected $guareded = [];
    protected $table = 'konsultasi_role';
}
