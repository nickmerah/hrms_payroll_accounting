<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class SalaryTable extends Model
{
    
   protected $table = 'salary';
    public $timestamps = false;
	protected $primaryKey = 'sid';
    protected $fillable = ['sfid',	'salarystructure',	'salarygrade',	'salarylevel',	'amount'];

  

     
    
}
