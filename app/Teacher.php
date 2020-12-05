<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['regno', 'name', 'guardianname', 'subject', 'doj', 'email','cellno','address','city', 'country','salary'];
}
