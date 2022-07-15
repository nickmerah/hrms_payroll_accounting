<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Inventory extends Model
{
    
   protected $table = 'inventory';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['dept', 	'item',	'qty','uprice','tcost','remarks'];

  

     
    
}
