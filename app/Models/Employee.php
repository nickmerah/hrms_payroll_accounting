<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Imageable;
 

class Employee extends Model
{
	use Imageable;
    
   protected $table = 'employee';
    public $timestamps = false;
	protected $primaryKey = 'eid';
    protected $fillable = [	'surname',	'firstname',	'othername',	'dept',	'position',	'salarygrade',	'salarylevel',	'salarystructure',	'dateofappointment',	'qualification',	'dob',	'stateor',	'lga',	'gender',	'gsm',	'sdistrict'	];

  

     
    
}
