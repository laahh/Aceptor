<?php

namespace App\Models;

use App\Models\Role;
use App\Models\User;
use App\Models\member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class applicant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('User')->withPivot('status', 'role', 'message');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function members()
    {
        return $this->hasMany('member');
    }

    public function roles()
    {
        return $this->hasMany('Role');
    }
}
