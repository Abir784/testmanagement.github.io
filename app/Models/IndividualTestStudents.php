<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualTestStudents extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function student_name(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
