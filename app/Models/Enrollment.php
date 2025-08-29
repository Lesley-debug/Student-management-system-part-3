<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'join_date', 'fee'];

    public $timestamps = true;

    // Enrollment belongs to a student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Enrollment belongs to a batch
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    // Enrollment has many payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
