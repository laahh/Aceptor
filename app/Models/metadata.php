<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class metadata extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'metadata';
    protected $fillable = ['meta_key', 'meta_value'];
}
