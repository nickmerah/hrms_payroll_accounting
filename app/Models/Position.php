<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Position extends Model
{
    
   protected $table = 'position';
    public $timestamps = false;
	protected $primaryKey = 'pid';
    protected $fillable = ['positionname'];

  

     
    
}
