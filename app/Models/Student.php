<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'course_id'];

//    protected $guarded = ['created_at', 'updated_at'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
