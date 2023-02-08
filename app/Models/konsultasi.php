<?php

namespace App\Models;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class konsultasi extends Model
{
    use HasFactory;
    protected $table = 'konsultasi';
    protected $guareded = [];
    protected $fillable = ['namaDokter', 'spesialis', 'image', 'user_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function members()
    {
        return $this->hasMany('App\Models\Member');
    }

    public function roles()
    {
        return $this->hasMany('Role');
    }
}
