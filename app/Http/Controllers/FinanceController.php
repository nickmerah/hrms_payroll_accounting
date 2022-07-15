<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\ImageUploadRequest;
use App\Models\Account;
use App\Models\SalaryGrade;
use App\Models\SalaryLevel;
use App\Models\SalaryTable;
use App\Models\SalaryStructure;
use App\Models\Position;
use App\Models\Department;
use App\Models\Employee;
use App\Models\StateofOrigin;
use App\Models\SDistrict;
use App\Models\Lga;
use App\Models\EmployeePaye;
use App\Models\EmployeeMonthlyPaye;
use App\Models\Cashbook;
use App\Models\Cashrecon;
use App\Models\Cashreceipt;
use App\Models\WeeklyMandate;
use App\Models\VoucherRegistrar;
use App\Models\Inventory;
use App\Models\BinCard;
use App\Models\Voting;
use App\Models\RevenueCode;
use App\Models\RevenueExpenditure;
use App\Models\BudgetReturns;
use App\Models\Retirement;
use Session;

class FinanceController extends Controller
{
     public function __construct(Request $request)
    {
		
		 
		
		/* if(!$request->session()->exists('uid'))
        {
             echo '<script type="text/javascript">
			alert("What Exactly is your Wish!");
			window.location = "/";
		</script>';
            exit(); 
        }else{*/
		$this->grade = new SalaryGrade();
		$this->level = new SalaryLevel();
		$this->salary = new SalaryTable();
		$this->structure = new SalaryStructure();
		$this->position = new Position();
		$this->department = new Department();
		$this->employee = new Employee();
		$this->employeepaye = new EmployeePaye();
		$this->computepaye = new EmployeeMonthlyPaye();
		$this->cashbook = new Cashbook();
		$this->cashrecon = new Cashrecon();
		$this->cashreceipt = new Cashreceipt();
		$this->weeklymandate = new WeeklyMandate();
		$this->voucherregistrar = new VoucherRegistrar();
		$this->inventory = new Inventory();
		$this->bincard = new BinCard();
		$this->voting = new Voting();
		$this->revcode = new RevenueCode();
		$this->revexp = new RevenueExpenditure();
		$this->budget = new BudgetReturns();
		$this->retirement = new Retirement();
			  
				 
		//}
	 
         
    }
	
	public function dashboard(Request $request)
    {
	    
		 
		 $nodept = $this->department::count();
		 $noemployees = $this->employee::count();
		  
		 return view('dashboard', ['nodept' =>   $nodept, 'noemployees' =>   $noemployees]);
	}
	
	public function salarygrade()
    {
	  
	  $grades = $this->grade::all();
	   return view('sgrade', ['grades' =>   $grades]); 
	 
	}
	
	public function salarytable()
    {
	  
	  $stable = $this->salary::all();
	   return view('salaries', ['sals' =>   $stable]); 
	 
	}
	
	public function salarystructure()
	  
    {
	  $structures = $this->structure::all();
	   return view('sstructure', ['structures' =>   $structures]); 
	 
	}
	
	public function savesalarystructure(Request $request)
    {
	   
	    $this->structure->name   = $request->sstructure;  
		$rules =  ['sstructure' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'sstructure.required' => 'Salary Grade is required !' ] );  
		if ($validator->fails()) {
			return redirect('/structure')
			->withInput()
			->withErrors($validator);
		}else{
	 	$save = $this->structure::firstOrCreate(
        [
            'structurename'             => $this->structure->name
        ],
        [
            'structurename'            => strtoupper($this->structure->name)
        ]
    );
		}  
     return redirect()->intended('structure');
	}
	
	public function editstructures($id)
    {
		
	    $structures = $this->structure::findOrFail($id);
		 
		return view('updatestructure', ['structures' =>   $structures]);
           
	 
	}
	
	public function updatesalarystructure(Request $request)
    {
	   
	    
		$rules =  ['sstructure' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'sstructure.required' => 'Salary Structure is required !' ] );  
		if ($validator->fails()) {
			return redirect('/structure')
			->withInput()
			->withErrors($validator);
		}else{
	 	
		$structures = $this->structure::find($request->sid);
		$structures->structurename = strtoupper($request->sstructure);
 		$structures->save();
	
		
		}  
     return redirect()->intended('structure');
	}
	
	
	public function salarylevel()
    {
	  
	  $levels = $this->level::all();
	   return view('slevel', ['levels' =>   $levels]); 
	 
	}
	
	public function viewposition()
    {
	  
	  $positions = $this->position::all();
	   return view('positions', ['positions' =>   $positions]); 
	 
	}
	
	public function saveposition(Request $request)
    {
	   
	    $this->position->name   = $request->position;  
		$rules =  ['position' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'position.required' => 'Position is required !' ] );  
		if ($validator->fails()) {
			return redirect('/position')
			->withInput()
			->withErrors($validator);
		}else{
	 	$save = $this->position::firstOrCreate(
        [
            'positionname'             => $this->position->name
        ],
        [
            'positionname'            => strtoupper($this->position->name)
        ]
    );
		}  
     return redirect()->intended('position');
	}

	public function editpositions($id)
    {
		
	    $positions = $this->position::findOrFail($id);
		 
		return view('updateposition', ['positions' =>   $positions]);
           
	 
	}
	
	public function updatepositions(Request $request)
    {
	   
	    
		$rules =  ['position' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'position.required' => 'Position Name is required !' ] );  
		if ($validator->fails()) {
			return redirect('/position')
			->withInput()
			->withErrors($validator);
		}else{
	 	
		$positions = $this->position::find($request->pid);
		$positions->positionname = strtoupper($request->position);
 		$positions->save();
	
		
		}  
     return redirect()->intended('position');
	}
	
		public function alldepts()
    {
	  
	  $depts = $this->department::all();
	   return view('alldept', ['depts' =>   $depts]); 
	 
	}
	
	public function savedept(Request $request)
    {
	   
	    $this->department->deptname   = $request->deptname;
		$this->department->depthead   = $request->depthead;
		  
		$rules =  ['deptname' => 'required', 'depthead' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'deptname.required' => 'Department Name is required !','depthead.required' => 'Head of Department name is required !'  ] );  
		if ($validator->fails()) {
			return redirect('/depts')
			->withInput()
			->withErrors($validator);
		}else{
			
	 	$save = $this->department::firstOrCreate(
        [
            'deptname' => $this->department->deptname
        ],
        [
            'deptname' => strtoupper($this->department->deptname),
			'depthead' => strtoupper($this->department->depthead)
			
        ]
    );
		}  
     return redirect()->intended('depts');
	}
	
	public function editdepts($id)
    {
		
	    $depts = $this->department::findOrFail($id);
		 
		return view('updatedept', ['depts' =>   $depts]);
           
	 
	}
	
	public function updatedepts(Request $request)
    {
	   
	    
		$rules =  ['deptname' => 'required', 'depthead' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'deptname.required' => 'Department Name is required !','depthead.required' => 'Head of Department name is required !' ] );  
		if ($validator->fails()) {
			return redirect('/depts')
			->withInput()
			->withErrors($validator);
		}else{
	 	
		$depts = $this->department::find($request->deptid);
		$depts->deptname = strtoupper($request->deptname);
		$depts->depthead = strtoupper($request->depthead);
 		$depts->save();
	
		
		}  
     return redirect()->intended('depts');
	}
	
	public function allemployee()
    {
	$emps =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
			
			
			 
	  
	   return view('employees', ['emps' =>   $emps, 
	  							 'grades' => $this->grade::all(),
	 							 'structures' => $this->structure::all(),
								'levels' => $this->level::all(),
								'positions' => $this->position::all(),
								'depts' => $this->department::all(),
								'sors' => StateofOrigin::all()]);								 
	 
	}
	
	public function getLgas($sid=0){

     $lgaData['data'] = Lga::orderby("lga_name","asc")
        ->select('lga_id','lga_name')
        ->where('state_id',$sid)
        ->get();

     return response()->json($lgaData);

   }
   
   public function getSendists($sid=0){

     $lgaData['data'] = SDistrict::orderby("sdname","asc")
        ->select('id','sdname')
        ->where('stateid',$sid)
        ->get();

     return response()->json($lgaData);

   }
   
   
   public function employeephotoupdate(ImageUploadRequest $request)
    {
	    
		echo $this->employee->eid   =  $request->employeeid;
		  
		$this->employee->storeMedia($request);

      echo   'Image uploaded successfully';  
		
			
	 
	}
	
	
	
	
	public function saveemployee(Request $request)
    {
	    $this->employee->surname   = strtoupper($request->surname);
		$this->employee->firstname   = strtoupper($request->firstname);
		$this->employee->othername   = strtoupper($request->othername);
		$this->employee->dept   = $request->dept;
		$this->employee->position   = $request->position;
		$this->employee->salarygrade   = $request->sgrade;
		$this->employee->salarylevel   = $request->slevel;
		$this->employee->salarystructure   = $request->structure;
		$this->employee->dateofappointment   = $request->dofa;
		$this->employee->qualification   = $request->qualify;
		$this->employee->dob   = $request->dob;
		$this->employee->stateor   = $request->sor;
		$this->employee->lga   = $request->lga;
		$this->employee->gender   = $request->gender;
		$this->employee->gsm   = $request->gsm;
		$this->employee->sdistrict   = $request->sendist;

		
		  
		 $rules =  ['surname' => 'required', 'firstname' => 'required','dept' => 'required','position' => 'required',
		'sgrade' => 'required','slevel' => 'required','structure' => 'required','dofa' => 'required',
		'qualify' => 'required','dob' => 'required','sor' => 'required','lga' => 'required'
		,'gender' => 'required','gsm' => 'required','sendist' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'surname.required' => 'Surname is required !','firstname.required' => 'Firstname is required !'
		,'position.required' => 'Position is required !','sgrade.required' => 'Salary Grade is required !','slevel.required' => 'Salary Level is required !','structure.required' => 'Salary Structure is required !','dofa.required' => 'Date of First Appointment is required !','qualify.required' => 'Qualification is required !','dob.required' => 'Date of Birth is required !','sor.required' => 'State of Origin is required !','lga.required' => 'Local Government is required !','gender.required' => 'Gender is required !','gsm.required' => 'Phone Number is required !','sendist.required' => 'Senatorial District is required !'  ] );   
		if ($validator->fails()) {
			return redirect('/employee')
			->withInput()
			->withErrors($validator);
		}else{ 
		
		
			
	 	$eid = $this->employee->save();
		//upload pics
		$photo = $this->employee->eid.".jpg";
		$path = $request->file('image')->storeAs('public/photo', $photo); 
	
		$this->employeepaye->eid = $this->employee->eid;
		$savepaye = $this->employeepaye->save();
		}  
     return redirect()->intended('employee');
	}
	
	public function empolyeeview($id)
    {

	$emps =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept'),
				'state_name' => StateofOrigin::select('state_name')->whereColumn('state.state_id', 'employee.stateor'),
				'sgradename' => SalaryGrade::select('sgradename')->whereColumn('salarygrade.sid', 'employee.salarygrade'),
				'slevelname' => SalaryLevel::select('slevelname')->whereColumn('salarylevel.lid', 'employee.salarylevel'),
				'structurename' => SalaryStructure::select('structurename')->whereColumn('salarystructure.sid', 'employee.salarystructure'),
				'sdname' => SDistrict::select('sdname')->whereColumn('senatorialdistrict.id', 'employee.sdistrict'),
				'lga_name' => Lga::select('lga_name')->whereColumn('lga.lga_id', 'employee.lga')
				->limit(1)
				] )->where('eid',$id)->get();
		//print_r($emps); echo $emps->pluck('surname'); exit;	

	   return view('employeeview', ['emps' =>   $emps, 
	  							 'grades' => $this->grade::all(),
	 							 'structures' => $this->structure::all(),
								'levels' => $this->level::all(),
								'positions' => $this->position::all(),
								'depts' => $this->department::all(),
								'sors' => StateofOrigin::all()]);								 
	 
	}
	
	
	
	
	
	
	public function empolyeeviews($id)
    {

	$emps =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->where('eid',$id)->get();
			

	   return view('employees', ['emps' =>   $emps, 
	  							 'grades' => $this->grade::all(),
	 							 'structures' => $this->structure::all(),
								'levels' => $this->level::all(),
								'positions' => $this->position::all(),
								'depts' => $this->department::all(),
								'sors' => StateofOrigin::all()]);								 
	 
	}
	
	public function employeeupdate(Request $request)
    {
	    
		$rules =  ['surname' => 'required', 'firstname' => 'required','dept' => 'required','position' => 'required',
		'sgrade' => 'required','slevel' => 'required','structure' => 'required','dofa' => 'required',
		'qualify' => 'required','dob' => 'required','sor' => 'required','lga' => 'required'
		,'gender' => 'required','gsm' => 'required','sendist' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'surname.required' => 'Surname is required !','firstname.required' => 'Firstname is required !'
		,'position.required' => 'Position is required !','sgrade.required' => 'Salary Grade is required !','slevel.required' => 'Salary Level is required !','structure.required' => 'Salary Structure is required !','dofa.required' => 'Date of First Appointment is required !','qualify.required' => 'Qualification is required !','dob.required' => 'Date of Birth is required !','sor.required' => 'State of Origin is required !','lga.required' => 'Local Government is required !','gender.required' => 'Gender is required !','gsm.required' => 'Phone Number is required !','sendist.required' => 'Senatorial District is required !'  ] );  
		if ($validator->fails()) {
			return redirect('viewemployee/'.$request->eid)
			->withInput()
			->withErrors($validator);
		}else{
			
		$emp = $this->employee::find($request->eid);
		$emp->surname   = strtoupper($request->surname);
		$emp->firstname   = strtoupper($request->firstname);
		$emp->othername   = strtoupper($request->othername);
		$emp->dept   = $request->dept;
		$emp->position   = $request->position;
		$emp->salarygrade   = $request->sgrade;
		$emp->salarylevel   = $request->slevel;
		$emp->salarystructure   = $request->structure;
		$emp->dateofappointment   = $request->dofa;
		$emp->qualification   = $request->qualify;
		$emp->dob   = $request->dob;
		$emp->stateor   = $request->sor;
		$emp->lga   = $request->lga;
		$emp->gender   = $request->gender;
		$emp->gsm   = $request->gsm;
		$emp->sdistrict   = $request->sendist;
 	    $emp->save();
	 
		}  
     return redirect()->intended('viewemployee/'.$request->eid);
	}
	
	public function payeemployee()
    {
	$emps =  employeepaye::join('employee', 'employee.eid', '=', 'employee_paye.eid')
						->join('departments', 'employee.dept', '=', 'departments.deptid')
            			->select('employee.surname', 'employee.firstname', 'employee.othername', 'employee.salarygrade', 'employee.salarylevel', 'employee.salarystructure', 'employee_paye.bank', 'employee_paye.accountno','employee_paye.eid','departments.deptname')->get();
			 
						
						
	  // print_r($emps); exit;
	    return view('paye', ['emps' =>   $emps]);								 
	 
	}
	
	public function viewemployeepaye($id)
    {

	$emps =  employeepaye::join('employee', 'employee.eid', '=', 'employee_paye.eid')->select('employee_paye.*','employee.surname', 'employee.firstname', 'employee.salarygrade', 'employee.salarylevel', 'employee.salarystructure')->where('employee_paye.eid',$id)->get();
		
 	$sals = $this->salary::join('sfield', 'salary.sfid', '=', 'sfield.fid')
						->where('salary.salarystructure',$emps->pluck('salarystructure')->implode(', '))
						->where('salary.salarygrade',$emps->pluck('salarygrade')->implode(', '))
						->where('salary.salarylevel',$emps->pluck('salarylevel')->implode(', '))
						->get();
	
	 
	 

	   return view('viewemployeepaye', ['emps' =>   $emps, 'sals' =>   $sals]);								 
	 
	}
	
	public function payeupdate(Request $request){
		
		/*$rules =  ['net_earnings' => 'required', 'tax_probated' => 'required','tax_payable' => 'required','tax_liability' => 'required',	'chargeable_income' => 'required','reliefs_allowances' => 'required','relief_allowance' => 'required','total_emolument' => 'required','basic_sal' => 'required'] ;
 		/$validator = Validator::make($request->all(),$rules,$messages = [
        'basic_sal.required' => 'Basic Salary is required !','total_emolument.required' => 'Total Emolument is required !'
		,'relief_allowance.required' => 'Relief Allowance is required !','reliefs_allowances.required' => 'Reliefs and Allowances Grade is required !','chargeable_income.required' => 'Chargeable Income is required !','tax_liability.required' => 'Tax Liability  is required !','tax_payable.required' => 'Tax Payable is required !','tax_probated.required' => 'Tax Probated is required !','net_earnings.required' => 'Net Earnings is required !' ] );  
		if ($validator->fails()) {
			return redirect('viewpaye/'.$request->eid)
			->withInput()
			->withErrors($validator);
		}else{
			
		$emp = $this->employeepaye::find($request->pid);
		$emp->bank   =  $request->bank; 
		$emp->accountno   =  $request->accountno;  
		 $emp->basic_sal   =  $request->basic_sal; 
		$emp->total_emolument   = $request->total_emolument;
		$emp->relief_allowance   = $request->relief_allowance;
		$emp->reliefs_allowances   = $request->reliefs_allowances;
		$emp->chargeable_income   = $request->chargeable_income;
		$emp->tax_liability   = $request->tax_liability;
		$emp->tax_payable   = $request->tax_payable;
		$emp->tax_probated   = $request->tax_probated;
		$emp->net_earnings   = $request->net_earnings;
		//other details
		$emp->annual_grosspay   = $request->annual_grosspay;
		$emp->housing   = $request->housing;
		$emp->transport   = $request->transport;
		$emp->entertainment   = $request->entertainment;
		$emp->meal   = $request->meal;
		$emp->utility   = $request->utility;
		$emp->leave_allowance   = $request->leave_allowance;
		$emp->other_allowance   = $request->other_allowance;
		$emp->benefits   = $request->benefits;
		$emp->minimum_tax   = $request->minimum_tax;
		$emp->nhf   = $request->nhf;
		$emp->pension   = $request->pension;
		$emp->nsitf   = $request->nsitf;
		$emp->monthlypay   = $request->monthlypay;
		$emp->netpay   = $request->netpay;
 	    $emp->save();
	 
		}  */
		
		$rules =  ['accountno' => 'required', 'bank' => 'required','basic_sal' => 'required'] ;
 		$validator = Validator::make($request->all(),$rules,$messages = [
        'basic_sal.required' => 'Basic Salary is required !','bank.required' => 'Bank Name is required !'
		,'accountno.required' => 'Account Number is required !' ] );  
		if ($validator->fails()) {
			return redirect('viewpaye/'.$request->eid)
			->withInput()
			->withErrors($validator);
		}else{
			
		$emp = $this->employeepaye::find($request->pid);
		$emp->bank   =  $request->bank; 
		$emp->accountno   =  $request->accountno;  
		 $emp->basic_sal   =  $request->basic_sal; 
 	    $emp->save();
	 
		} 
     return redirect()->intended('viewpaye/'.$request->eid);
	}
	
	public function payecompute()
    {
	  
	  $depts = $this->department::all();
	  $allpayerec = $this->computepaye::join('departments', 'compute_paye.dept', '=', 'departments.deptid')
            			->select('departments.deptname', 'compute_paye.month', 'compute_paye.date_computed', 'compute_paye.dept')
						->groupBy('compute_paye.month','compute_paye.dept')
						->get();
					
	   return view('computepaye', ['depts' =>   $depts, 'allpayerecs' =>   $allpayerec]); 
	 
	}
	
	public function savemonthlypaye(Request $request)
    {
		 
		//get details of paye for this department
		$empayes = $this->employeepaye::join('employee', 'employee.eid', '=', 'employee_paye.eid')
               ->where('employee.dept', $request->dept)
               ->get();
		
		   
			   													
		foreach ($empayes as $empaye) {
			
		 	 $basic_sal = $this->salary::where('salarystructure',$empaye->salarystructure) 			                        
			            ->where('salarygrade',$empaye->salarygrade)
						->where('salarylevel',$empaye->salarylevel)
						->select('amount')
						->sum('amount');
			  
			$bs = $basic_sal; //basic salary
			$te = $bs; //total emolument
			if ((0.01*$te) > 200000){
				$ra = (0.01*$te) + (0.2*$te); //relief allowance
			}else{
				$ra = 200000+ (0.2*$te);
			}
		
			$rra = $ra;//relief and allowances
			
			if (($te-$rra) < 0){
				$ci = 0; //chargeable income
			}else{
				$ci = $te-$rra;
			} 
			    
			//7% on 300,000
			if ($ci < 300000){
				$sevenpercent = 0.07 * $ci;
			}else{
			$sevenpercent = 21000;
			}
			
			
			//11% on 300,000
			if (($ci - 300000) < 0){
				$elevenpercent = 0;
			}elseif (($ci - 300000) < 300000){
				$elevenpercent = 0.11*($ci - 300000);
			}else{
			$elevenpercent = 33000;
			}
			
			//15% on 500,000
			if (($ci - 600000) < 0){
				$fifteenpercent = 0;
			}elseif (($ci - 600000) < 500000){
				$fifteenpercent = 0.15*($ci - 600000);
			}else{
			$fifteenpercent = 75000;
			}
			
			
			//19% on 500,000
			if (($ci - 1100000) < 0){
				$ninteenpercent = 0;
			}elseif (($ci - 1100000) < 500000){
				$ninteenpercent = 0.19*($ci - 1100000);
			}else{
			$ninteenpercent = 95000;
			}
			
			//21% on 1,600,000
			if (($ci - 1600000) < 0){
				$twentyonepercent = 0;
			}elseif (($ci - 1600000) < 1600000){
				$twentyonepercent = 0.21*($ci - 1600000);
			}else{
			$twentyonepercent = 336000;
			}
			
			//24% on excess
			if (($ci - 3200000) < 0){
				$twentyfourpercent = 0;
			}else{
			$twentyfourpercent = 24 * ($ci - 3200000);
			}
			
			//minimum tax
			$mt = 1/100* $te;
			
			//Tax liability
			  if ($te < 300000){
				$tl = 0.01*$te;
			}else{
			$tl = $sevenpercent+$elevenpercent+$fifteenpercent+$ninteenpercent+$twentyonepercent+$twentyfourpercent;
			}
			
			//Tax payable
			 if ($mt < $tl){
				$tp = $tl;
			}else{
			$tp = $mt;
			}
			
			//Tax Liability Probated
			$tlp = ($tp/12*1);
			
			//Net earnings
			$ne = ($bs/12) - $tlp;
			
    $payerec[]  = [
   				 'eid' => $empaye->eid,
				 'fullnames' => "$empaye->surname $empaye->firstname $empaye->othername",
				 'dept' => $request->dept,
				 'basic_sal' => $bs,
    			'total_emolument' => $te,
    			'relief_allowance' => $ra,
				'reliefs_allowances' => $rra,
				'chargeable_income' => $ci, 
				'tax_liability' => $tl, 
				'tax_payable' => $tp, 			 
				'tax_probated' => $tlp, 
				'net_earnings' => $ne,  
				'bank' => $empaye->bank, 
				'accountno' => $empaye->accountno,
				'month' => $request->pmonth,
				'date_computed' => $request->computedate,
				 
					];
			}
			$this->computepaye::insert($payerec);
			
		 return redirect()->intended('payecomp');	
			
		
	}
	
	public function removemonthlypaye($mth, $dept)
    {
	  $deleted = $this->computepaye::where('compute_paye.month', $mth)->where('compute_paye.dept', $dept)->delete();
	  
	  return redirect()->intended('payecomp');	
	 
	}
	
	public function viewmonthlypaye($mth, $dept)
    {
	  //get details of paye for this department
		$allpayerecs = $this->computepaye::join('departments', 'compute_paye.dept', '=', 'departments.deptid')
				->where('dept', $dept)
			    ->where('month', $mth)
               ->get();	
			   
			     
	     $year =  explode('-',$allpayerecs->pluck('date_computed')[0])[0] ; 
	   $month = strtoupper(date("F", mktime(0, 0, 0, $allpayerecs->pluck('month')[0], 1)));
	 
	 
	 
	 return view('payeroll', ['allpayerecs' =>   $allpayerecs, 'year'=> $year, 'month'=> $month]); 
	}
	
	public function payemonth()
    {
	  
	  $depts = $this->department::all();
	   return view('paycomputemonth', ['depts' =>   $depts]); 
	 
	}	
	
	public function viewmonthpaye(Request $request)
    {
		 $mth = $request->pmonth;
		 $dept =  $request->dept; 
		 $year =  explode('-',$request->cdate)[0]; 
		 
	  //get details of paye for this department
		$allpayerecs = $this->computepaye::join('departments', 'compute_paye.dept', '=', 'departments.deptid')
				->where('dept', $dept)
			    ->where('month', $mth)
				->whereRaw('YEAR(date_computed)', $year)
               ->get();
			   
			    
		if ($allpayerecs->isEmpty()) {
			
				//  return redirect()->intended('payecompmonth');	
				  return redirect()->intended('payecompmonth')->with('error','No Record found for your selected Directorate');

		}else{	     
	      
	   $month = strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));
	 
	
	 
	 return view('payeroll', ['allpayerecs' =>   $allpayerecs, 'year'=> $year, 'month'=> $month]); 
	 }
	}
	
	
	public function payrollmonth()
    {
	  
	  $depts = $this->department::all();
	   return view('payrollpermonth', ['depts' =>   $depts]); 
	 
	}	
	
	
	public function viewmonthpayroll(Request $request)
    {
		 $mth = $request->pmonth;
		 $dept =  $request->dept; 
		 $year =  explode('-',$request->cdate)[0]; 
		 
	  //get details of paye for this department
		$allpayerecs = $this->computepaye::join('departments', 'compute_paye.dept', '=', 'departments.deptid')
				->where('dept', $dept)
			    ->where('month', $mth)
				->whereRaw('YEAR(date_computed)', $year)
               ->get();
			   
			    
		if ($allpayerecs->isEmpty()) {
			
				//  return redirect()->intended('payecompmonth');	
				  return redirect()->intended('genpayroll')->with('error','No Record found for your selected Directorate');

		}else{	     
	      
	   $month = strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));
	   
	    $dde = explode(',',$allpayerecs->pluck('deptname')->implode(',')); 
	  
	 
//	print_r($allpayerecs); 
	 return view('payrolls', ['allpayerecs' =>   $allpayerecs, 'year'=> $year, 'month'=> $month, 'dept_name'=> $dde[0]]); 
	 }
	}
	
	public function epayslip($eid, $dept,$mth, $year)
    {
		 
	  //get details of paye for this department
		$empayroll = $this->computepaye::join('departments', 'compute_paye.dept', '=', 'departments.deptid')
				->where('dept', $dept)
			    ->where('month', $mth)
				->where('eid', $eid)
				->whereRaw('YEAR(date_computed)', $year)
               ->get();

	   $month = strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));
	 
	    $dde = explode(',',$empayroll->pluck('deptname')->implode(',')); 
	  
	 
	 return view('epayslip', ['epayroll' =>   $empayroll, 'year'=> $year, 'month'=> $month, 'dept_name'=> $dde[0]]); 
	
	}
	
	public function payslipmonth()
    {
	  
	  $depts = $this->department::all();
	   return view('payslippermonth', ['depts' =>   $depts]); 
	 
	}
	
	public function allpayslip(Request $request)
    {
		 $mth = $request->pmonth;
		 $dept =  $request->dept; 
		 $year =  explode('-',$request->cdate)[0]; 
	  //get details of paye for this department
		$empayslip = $this->computepaye::join('departments', 'compute_paye.dept', '=', 'departments.deptid')
				->where('dept', $dept)
			    ->where('month', $mth)
				->whereRaw('YEAR(date_computed)', $year)
               ->get();
 
	   $month = strtoupper(date("F", mktime(0, 0, 0, $mth, 1)));
	
	   $dde = explode(',',$empayslip->pluck('deptname')->implode(',')); 
	  
	 return view('e_payslips', ['epayslips' =>   $empayslip, 'year'=> $year, 'month'=> $month, 'dept_name'=> $dde[0]]); 
	
	}
	
	
	public function cashbook()
    {
	 $payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
		
	$cashbook = $this->cashbook::join('employee', 'cashbook.payee', '=', 'employee.eid')
	->select('cashbook.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->get();
	
	$years	  = $this->cashbook::selectRaw('YEAR(cdate) as dateyear')->groupByRaw('YEAR(cdate)')->get();
	     
	   return view('cash_book', ['payees'=>$payees, 'cashbooks'=>$cashbook, 'dyears'=>$years]);								 
	 
	}
	
	public function savecashbook(Request $request)
    {
		$dates = explode('-', $request->cdate);
	 
	    $this->cashbook->payee   =  $request->payee ;
		$this->cashbook->folio   =  $request->folio ;
		$this->cashbook->cash   = $request->cash;
		$this->cashbook->bank   = $request->bank;
		$this->cashbook->cdate   = $request->cdate;
		$this->cashbook->month   = $dates[1];
		$this->cashbook->year   = $dates[0];
		$this->cashbook->description   = $request->description;
		$this->cashbook->folio2   = $request->folio2;
		$this->cashbook->cash2   = $request->cash2;
		$this->cashbook->bank2   = $request->bank2; 
 		 $this->cashbook->save();
	 
     return redirect()->intended('cashbook');
	}
	
	
	public function searchcashbook(Request $request)
    {
		 $cmonth = $request->cmonth;
		  $cyear =  $request->cyear;   
		  
	  
	$payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
		
	$cashbook = $this->cashbook::join('employee', 'cashbook.payee', '=', 'employee.eid')
	->select('cashbook.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->where('month', $cmonth)
	->where('year', $cyear)
	->get();
	
	$years	  = $this->cashbook::selectRaw('YEAR(cdate) as dateyear')->groupByRaw('YEAR(cdate)')->get();
	     
	   return view('cash_book', ['payees'=>$payees, 'cashbooks'=>$cashbook, 'dyears'=>$years,'export' => 1 ]); 
	
	}
	
	
	
	public function cashrecon()
    {
	 
		
	$cashr = $this->cashrecon::get();
	 
	     
	   return view('cash_recon', [ 'cashrs'=>$cashr]);								 
	 
	}
	
	public function savecashrecon(Request $request)
    {
		 
	 
	    $this->cashrecon->rdate   =  $request->rdate ;
		$this->cashrecon->particulars   =  $request->particulars ;
		$this->cashrecon->pvsno   = $request->pvsno;
		$this->cashrecon->rvno   = $request->rvno;
		$this->cashrecon->chequeno   = $request->chequeno;
		$this->cashrecon->memoamt   = $request->memoamt;
		$this->cashrecon->debit   = $request->debit;
		$this->cashrecon->credit   = $request->credit;
		$this->cashrecon->cumbalance   = $request->cumbalance;
		$this->cashrecon->acctcode   = $request->acctcode;
		
 		 $this->cashrecon->save();
	 
     return redirect()->intended('cashrecon');
	}
	
	
	public function searchcashrecon(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	  
	$cashr = $this->cashrecon::whereBetween('rdate', [$fdate, $tdate])->get();
	
	 
	   return view('cash_recon', [  'cashrs'=>$cashr]); 
	
	}
	
	
	public function cashreceipt()
    {
	 $payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
		
	$cashbook = $this->cashreceipt::join('employee', 'cashreceipt.payee', '=', 'employee.eid')
	->select('cashreceipt.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->get();
	
	 
	     
	   return view('cash_receipt', ['payees'=>$payees, 'cashbooks'=>$cashbook ]);								 
	 
	}
	
	public function savecashreceipt(Request $request)
    {
		 
	    $this->cashreceipt->cdate   = $request->cdate;
	    $this->cashreceipt->payee   =  $request->payee ;
		$this->cashreceipt->particulars   =  $request->particulars ;
		$this->cashreceipt->receiptno   = $request->receiptno;
		$this->cashreceipt->amount   = $request->amount;
		 
 		 $this->cashreceipt->save();
	 
     return redirect()->intended('cashreceipt');
	}
	
	
	public function searchcashreceipt(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	  
	$payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
		
 	
	 $cashbook = $this->cashreceipt::join('employee', 'cashreceipt.payee', '=', 'employee.eid')
	->select('cashreceipt.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->whereBetween('cdate', [$fdate, $tdate])
	->get();
	     
	   return view('cash_receipt', ['payees'=>$payees, 'cashbooks'=>$cashbook ]); 
	
	}
	
	
	public function weeklymandate()
    {
	 
		
	$cashr = $this->weeklymandate::get();
	 
	     
	   return view('weekly_mandate', [ 'cashrs'=>$cashr]);								 
	 
	}
	
	public function saveweeklymandate(Request $request)
    {
		 
	 
	    $this->weeklymandate->tdate   =  $request->tdate ;
		$this->weeklymandate->beneficiary   = $request->beneficiary;
		$this->weeklymandate->acctno   = $request->acctno;
		$this->weeklymandate->bank_cash   = $request->bank_cash;
		$this->weeklymandate->amount   = $request->amount;
		$this->weeklymandate->remarks   = $request->remarks;
		 
		
 		 $this->weeklymandate->save();
	 
     return redirect()->intended('weeklymandate');
	}
	
	
	public function searchweeklymandate(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	  
	$cashr = $this->weeklymandate::whereBetween('tdate', [$fdate, $tdate])->get();
	
	 
	   return view('weekly_mandate', [  'cashrs'=>$cashr]); 
	
	}
	
	


public function voucher_registrar()
    {
	 
	 $payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
		
	$cashr = $this->voucherregistrar::join('employee', 'vregister.payee', '=', 'employee.eid')
	->select('vregister.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->get();
	
		
	 
	 
	      return view('v_registrar', ['payees'=>$payees, 'cashrs'=>$cashr ]);	
	  						 
	 
	}
	
	public function savevoucherregistrar(Request $request)
    {
		 
	 
	    $this->voucherregistrar->pvdate   =  $request->pvdate ;
		$this->voucherregistrar->payee   =  $request->payee ;
		$this->voucherregistrar->description   = $request->description;
		$this->voucherregistrar->appdate   = $request->appdate;
		$this->voucherregistrar->pcode   = $request->pcode;
		$this->voucherregistrar->pvno   = $request->pvno;
		$this->voucherregistrar->amount   = $request->amount;
 
	    $this->voucherregistrar->save();
	 
     return redirect()->intended('vregistrar');
	}
	
	
	public function searchvoucherregistrar(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	   $cashr = $this->voucherregistrar::join('employee', 'vregister.payee', '=', 'employee.eid')
	->select('vregister.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->whereBetween('pvdate', [$fdate, $tdate])
	->get();
	 
	
	$payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
	 
	   return view('v_registrar', [  'cashrs'=>$cashr, 'payees'=>$payees]); 
	
	}
	


	public function inventory()
    {
	  $depts = $this->department::all();
	  
		
	   $cashr = $this->inventory::join('departments', 'inventory.dept', '=', 'departments.deptid')
	->select('inventory.*',  'departments.deptname')
	->get();
	
	
	
	 
	     
	   return view('inventory', [ 'cashrs'=>$cashr,'depts' =>   $depts]);								 
	 
	}
	
	public function saveinventory(Request $request)
    {
		 
	 
	    $this->inventory->dept   =  $request->dept ;
		$this->inventory->item   =  $request->item ;
		$this->inventory->qty   = $request->qty;
		$this->inventory->uprice   = $request->uprice;
		$this->inventory->tcost   = $request->uprice *  $request->qty;
		$this->inventory->remarks   = $request->remarks;
	 
		
 		 $this->inventory->save();
	 
     return redirect()->intended('invprofile');
	}
	
	
	public function searchinventory(Request $request)
    {
		$depts = $this->department::all();
	  
		 $dept = $request->dept;
	   $cashr = $this->inventory::join('departments', 'inventory.dept', '=', 'departments.deptid')
	->select('inventory.*',  'departments.deptname')
	->where('dept', $dept)
	->get();
	
	   return view('inventory', [ 'cashrs'=>$cashr,'depts' =>   $depts]);	 
	
	}
	
	public function bin()
    {
	 
		$depts = $this->department::all();

	   $cashr = $this->bincard::join('departments', 'bincard.unit', '=', 'departments.deptid')
	->select('bincard.*',  'departments.deptname')
	->get();
	   return view('bin', [ 'cashrs'=>$cashr,'depts' =>   $depts]);								 
	 
	}
	
	public function savebin(Request $request)
    {
		 
	 
	   	$this->bincard->description   = $request->description;
		$this->bincard->partno   = $request->partno;
		$this->bincard->unit   = $request->unit ;
		$this->bincard->no   = $request->no ;
		$this->bincard->maxstock   = $request->maxstock;
		$this->bincard->minstock   =  $request->minstock ;
		$this->bincard->rlevel   =  $request->rlevel ;
		$this->bincard->bdate   = $request->bdate;
		$this->bincard->rsrvno   = $request->rsrvno;
		$this->bincard->rqty   = $request->rqty ;
		$this->bincard->isrvno   = $request->isrvno;
		$this->bincard->iqty   =  $request->iqty ;
		$this->bincard->bqty   =  $request->bqty ;
		$this->bincard->odate   = $request->odate;
		$this->bincard->orderno   = $request->orderno;
		$this->bincard->oqty   = $request->oqty ;
		$this->bincard->remarks   = $request->remarks;
		
	 
		
 		 $this->bincard->save();
	 
     return redirect()->intended('getbin');
	}
	
	public function searchbin(Request $request)
    {
		$depts = $this->department::all();
	  
		 $dept = $request->unit;
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate; 
		  
		  
	   $cashr = $this->bincard::join('departments', 'bincard.unit', '=', 'departments.deptid')
	->select('bincard.*',  'departments.deptname')
	->where('unit', $dept)
	->whereBetween('bdate', [$fdate, $tdate])
	->get();
	
	   return view('bin', [ 'cashrs'=>$cashr,'depts' =>   $depts]);	 
	
	}
	
	public function votting()
    {
	 
		
		
			 $payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
		
	$cashr = $this->voting::join('employee', 'votting.payee', '=', 'employee.eid')
	->select('votting.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->get();
	 
	      return view('voting', ['payees'=>$payees, 'cashrs'=>$cashr ]);
	 						 
	 
	}
	
	public function savevoting(Request $request)
    {
		 
	 
	   	$this->voting->headno   = $request->headno;
		$this->voting->subheadno   = $request->subheadno;
		$this->voting->authamt   = $request->authamt ;
		$this->voting->services   = $request->services ;
		$this->voting->expenditures   = $request->expenditures;
		$this->voting->vdate   =  $request->vdate ;
		$this->voting->pvno   =  $request->pvno ;
		$this->voting->payee   = $request->payee;
		$this->voting->payment   = $request->payment;
		$this->voting->balance   = $request->authamt - $request->payment;
		$this->voting->cum   = $request->cum ;
		 
		$this->voting->particulars   =  $request->particulars ;
		$this->voting->remark   =  $request->remarks ;
 
 		 $this->voting->save();
	 
     return redirect()->intended('getvoting');
	}
	
	public function searchvoting(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	   $cashr = $this->voting::join('employee', 'votting.payee', '=', 'employee.eid')
	->select('votting.*', 'employee.surname', 'employee.firstname', 'employee.othername')
	->whereBetween('vdate', [$fdate, $tdate])
	->get();
	 
	
	$payees =  employee::addSelect([
				'positionname' => Position::select('positionname') ->whereColumn('position.pid', 'employee.position'), 
				'deptname' => Department::select('deptname')->whereColumn('departments.deptid', 'employee.dept')
				->limit(1)
				] )->get();
	 
	   return view('voting', [  'cashrs'=>$cashr, 'payees'=>$payees]); 
	
	}
	
	public function returnexpenditure()
    {
	 
		$rcodes = $this->revcode::all();

	   $cashr = $this->revexp::all();
	   
	   return view('rexpend', [ 'cashrs'=>$cashr,'rcodes' =>   $rcodes]);								 
	 
	}
	
	public function savereturnexpenditure(Request $request)
    {
		 
	 
	   	$this->revexp->rdate   = $request->rdate;
		$this->revexp->rcode   = $request->rcode;
		$this->revexp->description   = $request->description ;
		$this->revexp->appbudget   = $request->appbudget ;
		$this->revexp->mtarget   = $request->mtarget;
		$this->revexp->actualrev_exp   =  $request->actualrev_exp ;
		 $this->revexp->save();
	 
     return redirect()->intended('revexp');
	}
	
	public function searchreturnexpenditure(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	   $cashr = $this->revexp::whereBetween('rdate', [$fdate, $tdate])
	->get();
	 
	
	$rcodes = $this->revcode::all();
	 
	    return view('rexpend', [ 'cashrs'=>$cashr,'rcodes' =>   $rcodes]);	
	
	}
	
	public function returnbudget()
    {
	 
		$rcodes = $this->revcode::all();

	   $cashr = $this->budget::all();
	   
	   return view('budgets', [ 'cashrs'=>$cashr,'rcodes' =>   $rcodes]);								 
	 
	}
	
	public function savereturnbudget(Request $request)
    {
		
	 
	   	$this->budget->rcode   = $request->rcode;
		$this->budget->bdate   = $request->rdate;
		$this->budget->description   = $request->description ;
		$this->budget->appbudget   = $request->appbudget ;
		$this->budget->mtarget   = $request->mtarget;
		$this->budget->actualrev_exp   =  $request->actualrev_exp ;
		$this->budget->mvariance   =  $request->mvariance ;
		$this->budget->cum_target = $request->cum_target;
		$this->budget->cum_rev_todate   = $request->cum_rev_todate;
		$this->budget->cvariance   = $request->cvariance ;
		$this->budget->vbook_bal   = $request->vbook_bal ;
		$this->budget->pcum_target   =  $request->pcum_target ;
 
 		 $this->budget->save();
	 
     return redirect()->intended('budrevexp');
	}
	
	public function searchreturnbudget(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	   $cashr = $this->budget::whereBetween('bdate', [$fdate, $tdate])
	->get();
	 
	
	   $rcodes = $this->revcode::all();
	 
	    return view('budgets', [ 'cashrs'=>$cashr,'rcodes' =>   $rcodes]);
	
	}
	
	public function retirement()
    {
	 
		$rcodes = $this->revcode::all();
        $depts = $this->department::all();
	   
	    $cashr = $this->retirement::join('departments', 'retirement.dept', '=', 'departments.deptid')
	->select('retirement.*',  'departments.deptname')
	->get();
	   
	   return view('retire', [ 'cashrs'=>$cashr,'rcodes' =>   $rcodes,'depts' =>   $depts]);								 
	 
	}
	
	public function saveretirement(Request $request)
    {
		 
	 
	   	$this->retirement->appdate   = $request->appdate;
		$this->retirement->dept   = $request->dept;
		$this->retirement->itemno   = $request->itemno ;
		$this->retirement->description   = $request->description ;
		$this->retirement->rcode   = $request->rcode;
		$this->retirement->amount   =  $request->amount ;
		$this->retirement->pvno   =  $request->pvno ;
		 
 
 		 $this->retirement->save();
	 
     return redirect()->intended('retire');
	}
	
	public function searchretirement(Request $request)
    {
		 $fdate = $request->fdate;
		  $tdate =  $request->tdate;   
		  
	  $rcodes = $this->revcode::all();
        $depts = $this->department::all();
	   
	     $cashr = $this->retirement::join('departments', 'retirement.dept', '=', 'departments.deptid')
	->select('retirement.*',  'departments.deptname')
	->whereBetween('appdate', [$fdate, $tdate])
	->get();
	 
	
	  
	 
	     return view('retire', [ 'cashrs'=>$cashr,'rcodes' =>   $rcodes,'depts' =>   $depts]);
	
	}
}
