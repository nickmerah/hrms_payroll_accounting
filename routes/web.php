<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Account;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/dologin', function (Request $request) {
	  $data = $request->input();
		 $uname   = $data['uname'];
		  $upass  = strtolower($data['upass']);
		  
		  $rules =  [
            'uname' => 'required',
			  'upass' => 'required',
			  
        ] ;
 
	$validator = Validator::make($request->all(),$rules,$messages = [
   
	'uname.required' => 'Username is required !', 
	 'upass.required' => 'Password is required !',
] ); 

if ($validator->fails()) {
			return redirect('/')
			->withInput()
			->withErrors($validator);
		}else{
			
     //$pwd = Hash::make($password);
 
	  	 $credentials = Account::select('uid', 'password', 'groupcat', 'username')
		 		->where('username', $uname)
                ->first();
 
	  if ( isset ($credentials) and (Hash::check($upass, $credentials->password))) {
            $request->session()->regenerate(); 
		   $request->session()->put('uid', $credentials->uid);
		    $request->session()->put('group', $credentials->groupcat);
			 $request->session()->put('username', $credentials->username);
		 
 			return redirect()->intended('welcome');
        }else{
        return back()->withInput()->withErrors([
            'Error: Username/Password, Please try Again',
        ]);
		}
    } 
	
})->name('dologin'); 

Route::get('/welcome',[FinanceController::class, 'dashboard']);


//salary structure

Route::get('/structure',[FinanceController::class, 'salarystructure']);
 
Route::post('/addsstructure',[FinanceController::class, 'savesalarystructure'])->name('addsstructure');

Route::get('/editstructure/{id}', [FinanceController::class, 'editstructures']);

Route::post('/updatesstructure',[FinanceController::class, 'updatesalarystructure'])->name('updatesstructure');

//salary grade
Route::get('/grade',[FinanceController::class, 'salarygrade']);
//salary level
Route::get('/level',[FinanceController::class, 'salarylevel']);

//salary table
Route::get('/stable',[FinanceController::class, 'salarytable']);


//position

Route::get('/position',[FinanceController::class, 'viewposition']);
 
Route::post('/addposition',[FinanceController::class, 'saveposition'])->name('addposition');

Route::get('/editposition/{id}', [FinanceController::class, 'editpositions'])->name('editposition');

Route::post('/updateposition',[FinanceController::class, 'updatepositions'])->name('updateposition');

//department

Route::get('/depts',[FinanceController::class, 'alldepts'])->name('depts');
 
Route::post('/adddept',[FinanceController::class, 'savedept'])->name('adddept');

Route::get('/editdept/{id}', [FinanceController::class, 'editdepts'])->name('editdept');

Route::post('/updatedept',[FinanceController::class, 'updatedepts'])->name('updatedept');


//employee

Route::get('/employee',[FinanceController::class, 'allemployee'])->name('employee');
 
Route::post('/addemployee',[FinanceController::class, 'saveemployee'])->name('addemployee');

Route::get('/viewemployee/{id}', [FinanceController::class, 'empolyeeview']);

Route::post('/updateemployee',[FinanceController::class, 'employeeupdate'])->name('updateemployee');

Route::get('/getLga/{id}', [FinanceController::class, 'getLgas']);

Route::get('/getSendist/{id}', [FinanceController::class, 'getSendists']);

Route::post('uploademployeephoto',[FinanceController::class, 'employeephotoupdate'])->name('uploademployeephoto');


//paye

Route::get('/viewpayecomp',[FinanceController::class, 'payeemployee']);

Route::get('/viewpaye/{id}', [FinanceController::class, 'viewemployeepaye']);

Route::post('/updateemployeepaye',[FinanceController::class, 'payeupdate'])->name('updateemployeepaye');

Route::get('/payecomp',[FinanceController::class, 'payecompute']);

Route::post('/computepayepermonth',[FinanceController::class, 'savemonthlypaye'])->name('computepayepermonth');

Route::get('/removecomputepaye/{mth}/{dept}', [FinanceController::class, 'removemonthlypaye']);

Route::get('/viewcomputepaye/{mth}/{dept}', [FinanceController::class, 'viewmonthlypaye']);

Route::get('/payecompmonth',[FinanceController::class, 'payemonth']);

Route::post('/view_compute_paye', [FinanceController::class, 'viewmonthpaye'])->name('view_compute_paye');


//payroll & payslip

Route::get('/genpayroll',[FinanceController::class, 'payrollmonth']);

Route::post('/view_payroll', [FinanceController::class, 'viewmonthpayroll'])->name('view_payroll');

Route::get('/viewpayslip/{eid}/{dept}/{mth}/{year}', [FinanceController::class, 'epayslip']);


Route::get('/genpayslip',[FinanceController::class, 'payslipmonth']);

Route::post('/view_payslip', [FinanceController::class, 'allpayslip'])->name('view_payslip');


//Cashbook

Route::get('/cashbook',[FinanceController::class, 'cashbook']);
Route::post('/addcashbook',[FinanceController::class, 'savecashbook'])->name('addcashbook');
Route::post('/scashbook', [FinanceController::class, 'searchcashbook'])->name('scashbook');


//Cash Reconciliation
Route::get('/cashrecon',[FinanceController::class, 'cashrecon']);
Route::post('/addcashrecon',[FinanceController::class, 'savecashrecon'])->name('addcashrecon');
Route::post('/scashrecon', [FinanceController::class, 'searchcashrecon'])->name('scashrecon');

//Cash Receipt
Route::get('/cashreceipt',[FinanceController::class, 'cashreceipt']);
Route::post('/addcashreceipt',[FinanceController::class, 'savecashreceipt'])->name('addcashreceipt');
Route::post('/scashreceipt', [FinanceController::class, 'searchcashreceipt'])->name('scashreceipt');

// Weekly Mandate
Route::get('/weeklymandate',[FinanceController::class, 'weeklymandate']);
Route::post('/addweeklymandate',[FinanceController::class, 'saveweeklymandate'])->name('addweeklymandate');
Route::post('/sweeklymandate', [FinanceController::class, 'searchweeklymandate'])->name('sweeklymandate');


//Cashflow - pending

Route::get('/cashflow',[FinanceController::class, 'cashflow']);
Route::post('/addcashflow',[FinanceController::class, 'savecashflow'])->name('addcashflow');
Route::post('/scashflow', [FinanceController::class, 'searchcashflow'])->name('scashflow');


//Voucher Registrar
Route::get('/vregistrar',[FinanceController::class, 'voucher_registrar']);
Route::post('/addvregistrar',[FinanceController::class, 'savevoucherregistrar'])->name('addvregistrar');
Route::post('/svregistrar', [FinanceController::class, 'searchvoucherregistrar'])->name('svregistrar');


//Inventory Profile
Route::get('/invprofile',[FinanceController::class, 'inventory']);
Route::post('/addinventory',[FinanceController::class, 'saveinventory'])->name('addinventory');
Route::post('/sinventory', [FinanceController::class, 'searchinventory'])->name('sinventory');


//BIN
Route::get('/getbin',[FinanceController::class, 'bin']);
Route::post('/addbin',[FinanceController::class, 'savebin'])->name('addbin');
Route::post('/sbin', [FinanceController::class, 'searchbin'])->name('sbin');

//VOTING
Route::get('/getvoting',[FinanceController::class, 'votting']);
Route::post('/addvoting',[FinanceController::class, 'savevoting'])->name('addvoting');
Route::post('/svoting', [FinanceController::class, 'searchvoting'])->name('svoting');

//RETURNS of Revenue and Expenditure 
Route::get('/revexp',[FinanceController::class, 'returnexpenditure']);
Route::post('/addreturnexpenditure',[FinanceController::class, 'savereturnexpenditure'])->name('addreturnexpenditure');
Route::post('/sreturnexpenditure', [FinanceController::class, 'searchreturnexpenditure'])->name('sreturnexpenditure');

//RETURNS budget of Revenue and Expenditure 
Route::get('/budrevexp',[FinanceController::class, 'returnbudget']);
Route::post('/addreturnbudget',[FinanceController::class, 'savereturnbudget'])->name('addreturnbudget');
Route::post('/sreturnbudget', [FinanceController::class, 'searchreturnbudget'])->name('sreturnbudget');


//Retirement
Route::get('/retire',[FinanceController::class, 'retirement']);
Route::post('/addretirement',[FinanceController::class, 'saveretirement'])->name('addretirement');
Route::post('/sretirement', [FinanceController::class, 'searchretirement'])->name('sretirement');
