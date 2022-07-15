<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class BinCard extends Model
{
    
   protected $table = 'bincard';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['description','unit',	'partno','no','maxstock','minstock','rlevel','bdate','rsrvno','rqty'
	,'isrvno','iqty','bqty','odate','orderno','oqty','remarks'];
}
 															

