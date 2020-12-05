<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['regno', 'firstname', 'lastname', 'fathername', 'fatheroccupation','mothername','class',
    'section','dob','email','cellno',
    'address','city', 'country' ];
}
