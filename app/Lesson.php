<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'day', 'time', 'name', 'teacher', 'max_students', 'date',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\User', 'lesson_user', 'user_id', 'lesson_id');
    }
}