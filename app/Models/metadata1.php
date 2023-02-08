<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class metadata1 extends Model
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'metadata1s';
    protected $fillable = ['meta_key', 'meta_value'];
}
