<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class SalaryField extends Model
{
    
   protected $table = 'sfield';
    public $timestamps = false;
	protected $primaryKey = 'fid';
    protected $fillable = ['fieldname'];

  

     
    
}
