<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class SalaryStructure extends Model
{
    
   protected $table = 'salarystructure';
    public $timestamps = false;
	protected $primaryKey = 'sid';
    protected $fillable = ['structurename'];

  

     
    
}
