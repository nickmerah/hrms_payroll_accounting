<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class Cashreceipt extends Model
{
    
   protected $table = 'cashreceipt';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['cdate',	'payee',	'particulars',	'receiptno',	'amount'];

  

     
    
}
