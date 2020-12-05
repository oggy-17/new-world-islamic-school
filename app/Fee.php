<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = ['regno', 'firstname', 'lastname', 'class','section',
    'month','year', 'tutionfee' , 'annualfee' ,'totalfee',
    'feepaid','balancefee','feestatus' ];
}
