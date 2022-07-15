<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Cashbook extends Model
{
    
   protected $table = 'cashbook';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['payee',	'folio',	'cash',	'bank',	'cdate', 	'month',  	'year',	'description',	'folio2',	'cash2',	'bank2'];

  

     
    
}
