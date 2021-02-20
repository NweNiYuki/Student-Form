<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
  
    protected $fillable = [

        'name', 'shortname', 'code', 'description'
    ];

    public function student()
    {
        return $this->hasMany(Student::class, 'student');
    }
 }
