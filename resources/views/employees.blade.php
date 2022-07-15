@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Employees</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employee</a>
                            </li>
                            <li class="breadcrumb-item active">All Employees</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            
                                <p>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    
                              <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Add New Employee<i class="material-icons">add</i> </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">New Staff</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('addemployee') }}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                                        <label for="email_address1">Surname</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                              
                                                                   name="surname"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        <label for="email_address1">Firstname</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="firstname"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Othernames</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="othername"  
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Gender</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
    
     
     <select class="form-control select2" data-placeholder="Select" name="gender"  required="required" >
                                            <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                   
                                        </select>
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Phone Number</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number"  
                                                                    class="form-control"
                                                                   
                                                                   name="gsm"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Date of Birth</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="dob"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">State of Origin</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                               
     
     <select class="form-control select2" data-placeholder="Select" name="sor"  id = "sor" required="required" >
                                            <option></option>
                                             @foreach ($sors  as $sor )
                                            <option value="{{ $sor->state_id }}">{{ $sor->state_name }}</option>
                                          @endforeach
                                   
                                        </select>  
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Local Government</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                               <select class="form-control select2" data-placeholder="Select" name="lga"  id = "lga" required="required" >
                                           
                                             
                                            <option value="">Select State of Origin First</option>
                                         
                                   
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
                                                        
                                                        <label for="email_address1">Directorate</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                             <select class="form-control select2" data-placeholder="Select" name="dept"  required="required" >
                                            <option></option>
                                             @foreach ($depts  as $dept )
                                            <option value="{{ $dept->deptid }}">{{ $dept->deptname }}</option>
                                          @endforeach
                                   
                                        </select>  
 
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Position</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                            <select class="form-control select2" data-placeholder="Select" name="position"  required="required" >
                                            <option></option>
                                             @foreach ($positions  as $position )
                                            <option value="{{ $position->pid }}">{{ $position->positionname }}</option>
                                          @endforeach
                                   
                                        </select>  
 
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Salary Grade</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                
                                                               <select class="form-control select2" data-placeholder="Select" name="sgrade"  required="required" >
                                            <option></option>
                                             @foreach ($grades  as $grade )
                                            <option value="{{ $grade->sid }}">{{ $grade->sgradename }}</option>
                                          @endforeach
                                   
                                        </select>  
                                                                
                                                                
                                                                
                                                                                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Salary Level</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            <select class="form-control select2" data-placeholder="Select" name="slevel"  required="required" >
                                            <option></option>
                                             @foreach ($levels  as $level )
                                            <option value="{{ $level->lid }}">{{ $level->slevelname	 }}</option>
                                          @endforeach
                                   
                                        </select>  
                                        
                                                                
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Salary Structure</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            <select class="form-control select2" data-placeholder="Select" name="structure"  required="required" >
                                            <option></option>
                                             @foreach ($structures  as $structure )
                                            <option value="{{ $structure->sid }}">{{ $structure->structurename	 }}</option>
                                          @endforeach
                                   
                                        </select>  
 
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Date of First Appointment</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="dofa"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Qualification</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="qualify"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                        <label for="email_address1">Senatorial District</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                 
     
      <select class="form-control select2" data-placeholder="Select" name="sendist"  id = "sendist" required="required" >
                                           
                                             
                                            <option value="">Select State of Origin First</option>
                                         
                                   
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
                                                        
                                                         <label for="email_address1">Upload Passport Photo</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file"  
                                                                    class="form-control"
                                                                   
                                                                   name="image"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                       
                                                        <br>
                                                                                                            <button type="submit"
                                                        class="btn btn-info waves-effect" >Save</button>

                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="modal fade" id="pictureModal" tabindex="-1" role="dialog"
                                        aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">Upload Passport</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post" enctype="multipart/form-data" action="{{ route('uploademployeephoto') }}">
                                @csrf
                                                         
                                                        
                                                         <label for="email_address1">Upload Passport Photo</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file"  
                                                                    class="form-control"
                                                                   
                                                                   name="image"  required="required" 
     >
                                                            </div>
                                                            
                                                             
                                                     <input name="employeeid" type="hidden" id="employeeid">    
                 
                                                     
                                                        </div>
                                                        
                                                      
                                                       
                                                        <br>
                                                                                                            <button type="submit"
                                                        class="btn btn-info waves-effect" >Save Photo</button>

                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          </div></p>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-hover js-basic-example contact_list" style="font-size:12px">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="center"> Fullnames </th>
                                            <th class="center"> Directorate </th>
                                            <th class="center"> Position </th>
                                            <th class="center"> Gender</th>
                                            <th class="center">Phone</th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($emps  as $emp )
                                        <tr class="odd gradeX">
                                            <td class="table-img center">
                                             <a  data-bs-toggle="modal"
                                        data-bs-target="#pictureModal" id="submit{{$emp->eid}}"> <img src="{{ asset('photo/avatar.jpg') }}" width="100" height="80"> </a>
                                           
                                            
                                            </td>
                                            <td class="center">{{ $emp->surname }} {{ $emp->firstname }} {{ $emp->othername }}</td>
                                            <td class="center">{{ $emp->deptname }}</td>
                                            <td class="center">{{ $emp->positionname }}</td>
                                            <td class="center">{{ $emp->gender }}</td>
                                            <td class="center">{{ $emp->gsm }}<input id="emode{{$emp->eid}}" type="hidden" value="{{ $emp->eid }}" /></td>
                                            <td class="center">
                                               
                                              <?php /*  <a href="{{URL::to('/viewemployee/'.$emp->eid) }}" class="btn btn-tbl-delete">
                                                    <i class="material-icons">pageview</i>
                                                </a>*/?> <a href="{{URL::to('/viewemployee/'.$emp->eid) }}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                            </td>
                                        </tr>
                                         <script type="text/javascript">
		 $("#submit{{$emp->eid}}").click(function () {
            var text = $("#emode{{$emp->eid}}").val();
            $("#modal_body").html(text);
			document.getElementById("employeeid").value = text;
        });
	</script>
                                        
                                        @endforeach
                                        
      
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	