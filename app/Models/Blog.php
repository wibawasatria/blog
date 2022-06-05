<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [
        'id','created_at','updated_at'
    ];

    protected $fillable = [
        'title', 'description', 'created_user_id'
    ];

    public function createdUser()
    {
        return $this->hasOne('App\Models\User','id','created_user_id');
    }
}
