<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class SalaryGrade extends Model
{
    
   protected $table = 'salarygrade';
    public $timestamps = false;
	protected $primaryKey = 'sid';
    protected $fillable = ['sgradename'];

  

     
    
}
