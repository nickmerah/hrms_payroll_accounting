@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Edit Employee</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employee</a>
                            </li>
                            <li class="breadcrumb-item active">Employee Details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>View</strong> Employee Details</h2>
                           
                        </div>
                        <div class="body">
                           <form class="form-signin" method="post"   action="{{ route('updateemployee') }}" autocomplete="off">
                                @csrf
                                                       
                                                       
                                                       <div class="row clearfix">
                                                       <input name="eid" type="hidden" value="{{ $emps->pluck('eid')->implode(', ') }}" />
                                <div class="col-sm-6">
                                    <label for="email_address1">Surname</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                              
                                                                   name="surname"  required="required" value="{{ $emps->pluck('surname')->implode(', ') }}">
                                                            </div>
                                                        </div>
                                </div>
                                <div class="col-sm-6">
                                   <label for="email_address1">Firstname</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="firstname"  required="required" 
    value="{{ $emps->pluck('firstname')->implode(', ') }}" >
                                                            </div>
                                                        </div>
                                </div>
                            </div>
                                                       
                                                     <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">Othernames</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="othername"  
     value="{{ $emps->pluck('othername')->implode(', ') }}">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                          <label for="email_address1">Gender</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
    
     
     <select class="form-control select2" data-placeholder="Select" name="gender"  required="required" >
                                            <option>{{ $emps->pluck('gender')->implode(', ') }}</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                   
                                        </select>
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <label for="email_address1">Phone Number</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number"  
                                                                    class="form-control"
                                                                   
                                                                   name="gsm"  required="required" 
    value="{{ $emps->pluck('gsm')->implode(', ') }}" >
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email_address1">Date of Birth</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="dob"  required="required" 
    value="{{ $emps->pluck('dob')->implode(', ') }}" >
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">State of Origin</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                               
     
     <select class="form-control select2" data-placeholder="Select" name="sor"  id = "sor" required="required" >
                                            <option value="{{ $emps->pluck('stateor')->implode(', ') }}">{{ $emps->pluck('state_name')->implode(', ') }}</option>
                                             @foreach ($sors  as $sor )
                                            <option value="{{ $sor->state_id }}">{{ $sor->state_name }}</option>
                                          @endforeach
                                   
                                        </select>  
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email_address1">Local Government</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                               <select class="form-control select2" data-placeholder="Select" name="lga"  id = "lga" required="required" >
                                           
                                             
                                            <option value="{{ $emps->pluck('lga')->implode(', ') }}">{{ $emps->pluck('lga_name')->implode(', ') }}</option>
                                         
                                   
                                        </select>  
     
     
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type='text/javascript'>
   $(document).ready(function(){
      $('#sor').change(function(){
         var id = $(this).val();
         $('#lga').find('option').not(':first').remove();
         $.ajax({
           url: "{{URL::to('/getLga') }}/" +id,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }
             if(len > 0){
                for(var i=0; i<len; i++){
                   var lga_id = response['data'][i].lga_id;
                   var lga_name = response['data'][i].lga_name;
                   var option = "<option value='"+lga_id+"'>"+lga_name+"</option>";
                   $("#lga").append(option); 
                }
             }

           }
         });
      });
   });
   </script>



                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <label for="email_address1">Directorate</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                             <select class="form-control select2" data-placeholder="Select" name="dept"  required="required" >
                                            <option value="{{ $emps->pluck('dept')->implode(', ') }}">{{ $emps->pluck('deptname')->implode(', ') }}</option>
                                             @foreach ($depts  as $dept )
                                            <option value="{{ $dept->deptid }}">{{ $dept->deptname }}</option>
                                          @endforeach
                                   
                                        </select>  
 
                                                            </div>
                                                        </div>
                                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="email_address1">Position</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                            <select class="form-control select2" data-placeholder="Select" name="position"  required="required" >
                                            <option value="{{ $emps->pluck('position')->implode(', ') }}">{{ $emps->pluck('positionname')->implode(', ') }}</option>
                                             @foreach ($positions  as $position )
                                            <option value="{{ $position->pid }}">{{ $position->positionname }}</option>
                                          @endforeach
                                   
                                        </select>  
 
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                               
                                                        <label for="email_address1">Salary Grade</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                
                                                               <select class="form-control select2" data-placeholder="Select" name="sgrade"  required="required" >
                                            <option value="{{ $emps->pluck('salarygrade')->implode(', ') }}">{{ $emps->pluck('sgradename')->implode(', ') }}</option>
                                             @foreach ($grades  as $grade )
                                            <option value="{{ $grade->sid }}">{{ $grade->sgradename }}</option>
                                          @endforeach
                                   
                                        </select>  
                                                                
                                                                
                                                                
                                                                                                                            </div>
                                                        </div>
                                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="email_address1">Salary Level</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            <select class="form-control select2" data-placeholder="Select" name="slevel"  required="required" >
                                            <option value="{{ $emps->pluck('salarylevel')->implode(', ') }}">{{ $emps->pluck('slevelname')->implode(', ') }}</option>
                                             @foreach ($levels  as $level )
                                            <option value="{{ $level->lid }}">{{ $level->slevelname	 }}</option>
                                          @endforeach
                                   
                                        </select>  
                                        
                                                                
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <label for="email_address1">Salary Structure</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            <select class="form-control select2" data-placeholder="Select" name="structure"  required="required" >
                                            <option value="{{ $emps->pluck('salarystructure')->implode(', ') }}">{{ $emps->pluck('structurename')->implode(', ') }}</option>
                                             @foreach ($structures  as $structure )
                                            <option value="{{ $structure->sid }}">{{ $structure->structurename	 }}</option>
                                          @endforeach
                                   
                                        </select>  
 
                                                            </div>
                                                        </div>
                                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email_address1">Date of First Appointment</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="dofa"  required="required" 
    value="{{ $emps->pluck('dateofappointment')->implode(', ') }}" >
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">Qualification</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="qualify"  required="required" 
  value="{{ $emps->pluck('qualification')->implode(', ') }}"   >
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email_address1">Senatorial District</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                 
     
      <select class="form-control select2" data-placeholder="Select" name="sendist"  id = "sendist" required="required" >
                                           
                                             
                                            <option value="{{ $emps->pluck('sdistrict')->implode(', ') }}">{{ $emps->pluck('sdname')->implode(', ') }}</option>
                                         
                                   
                                        </select>  
                                         <script type='text/javascript'>
   $(document).ready(function(){
      $('#sor').change(function(){
         var id = $(this).val();
         $('#sendist').find('option').not(':first').remove();
         $.ajax({
           url: "{{URL::to('/getSendist') }}/" +id,
           type: 'get',
           dataType: 'json',
           success: function(response){
             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }
             if(len > 0){
                for(var i=0; i<len; i++){
                   var id = response['data'][i].id;
                   var sdname = response['data'][i].sdname;
                   var option = "<option value='"+id+"'>"+sdname+"</option>";
                   $("#sendist").append(option); 
                }
             }

           }
         });
      });
   });
   </script>
                                                            </div>
                                                        </div>
                                    </div>
                                </div>
                            </div>
                            
           <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15">Update Employee Details</button>
                                <a href="{{URL::to('/employee') }}" class="btn btn-danger waves-effect">Go Back</a>
                                
                            </div>

                                                  </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	