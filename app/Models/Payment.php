<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['enrollment_id', 'amount', 'payment_date'];

    public $timestamps = true;

    // Payment belongs to enrollment
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
