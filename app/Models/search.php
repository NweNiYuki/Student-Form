<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class search extends Model
{
    use Notifiable;
    use SearchableTrait;

    protected $searchable = [

        'columns' => [
            'searches.name' => 10,
            'searches.rollno' => 10,
            'searches.subject' => 10,
            'searches.address' => 10,
            'searches.idno' => 10,
            'searches.id'  => 10,
        ]
    ];

    protected $fillable = [

        'name', 'rollno', 'subject', 'idno', 'email', 'address', 'phone', 'cover'
    ];
}
