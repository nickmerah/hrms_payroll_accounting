<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class BudgetReturns extends Model
{
    
   protected $table = 'returns_budget';
    public $timestamps = false;
	protected $primaryKey = 'id';
    protected $fillable = ['rcode', 'bdate',	'description',	'appbudget',	'mtarget',	 	'actualrev_exp',	'mvariance',	'cum_target',	'cum_rev_todate',	 	'cvariance',	'vbook_bal',	 	'pcum_target'];

 				 							
}
