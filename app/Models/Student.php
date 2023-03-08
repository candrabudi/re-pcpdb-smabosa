<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function StudentScore()
    {
        return $this->hasOne('App\Models\StudentScore','student_id', 'id');
    }
    public function StudentPresence()
    {
        return $this->hasOne('App\Models\StudentPresence','student_id', 'id');
    }
    public function StudentFather()
    {
        return $this->hasOne('App\Models\StudentFather','student_id', 'id');
    }
    public function StudentMother()
    {
        return $this->hasOne('App\Models\StudentMother','student_id', 'id');
    }
    public function StudentDocument()
    {
        return $this->hasOne('App\Models\StudentDocument','student_id', 'id');
    }
    public function SchoolOrigin()
    {
        return $this->hasOne('App\Models\SchoolOrigin','student_id', 'id');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }
    public function getUpdatedAtAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }
}
