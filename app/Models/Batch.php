<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Batch extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'start_date', 'course_id'];

    public $timestamps = true;

    // Batch belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    // Batch has many enrollments
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
