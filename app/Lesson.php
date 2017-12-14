<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lesson
 *
 * @property int $id
 * @property string $day
 * @property string $time
 * @property string $name
 * @property string $teacher
 * @property int $max_students
 * @property int $places_left
 * @property int $date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereMaxStudents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson wherePlacesLeft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereTeacher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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