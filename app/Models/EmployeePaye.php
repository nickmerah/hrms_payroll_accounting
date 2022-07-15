<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class EmployeePaye extends Model
{
    
   protected $table = 'employee_paye';
    public $timestamps = false;
	protected $primaryKey = 'pid';
    protected $fillable = [	'eid' 	];
 
    
}
