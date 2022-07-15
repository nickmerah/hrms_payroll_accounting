<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class SalaryLevel extends Model
{
    
   protected $table = 'salarylevel';
    public $timestamps = false;
	protected $primaryKey = 'lid';
    protected $fillable = ['slevelname'];

  

     
    
}
