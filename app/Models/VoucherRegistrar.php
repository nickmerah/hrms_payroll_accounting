<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class VoucherRegistrar extends Model
{
    
   protected $table = 'vregister';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['pvdate','payee',	'description',	'appdate','pcode','pvno','amount'];

  

     
    
}
