<?php

namespace App\Models;

use App\Models\Township;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = [

       'name', 'rollno', 'subject', 'idno', 'email', 'address', 'phone', 'cover', 'initial', 'nation', 'township_id'
   ];


   public function townshipstate()
   {
       return $this->belongsTo(Township::class, 'township_id');
   }
}

