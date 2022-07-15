<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 

class EmployeeMonthlyPaye extends Model
{
    
   protected $table = 'compute_paye';
    public $timestamps = false;
	protected $primaryKey = 'cid';
    protected $fillable = [	'eid', 'eid',	'basic_sal',	'total_emolument',	'relief_allowance',	'reliefs_allowances','chargeable_income',	'tax_liability',	'tax_payable',	'tax_probated',	'net_earnings',	'bank'	,'accountno',	'month'	,'date_computed'	];
 
    
}
