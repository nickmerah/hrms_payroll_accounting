@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Returns on Revenue & Expenditure</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Returns on Revenue & Expenditure</a>
                            </li>
                             
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
                                        data-bs-target="#addModal">Add New<i class="material-icons">add</i> </button>
                                 
                              &nbsp;  &nbsp;    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#searchModal">Search Record<i class="material-icons">search</i> </button>
                                 
                                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                        aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">New Record</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('addreturnexpenditure') }}" autocomplete="off">
                                @csrf
                                                       
                                                        <label for="email_address1">Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="rdate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                       <label for="email_address1">Revenue Code</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="form-control select2" data-placeholder="Select" name="rcode"  id = "rcode" required="required" >
                                            <option></option>
                                             @foreach ($rcodes  as $rcode )
                                            <option value="{{ $rcode->rcode }}">{{ $rcode->rcode  }} - {{ $rcode->rname }}  </option>
                                          @endforeach
                                   
                                        </select>  
                                                            </div>
                                                        </div>
                                                    
                                                        <label for="email_address1">Decscription</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="description"   required="required"
     >
                                                            </div>
                                                        </div>
                                                          
                         
                                                        
                                                      <label for="email_address1">Approve Budget</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="appbudget"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <label for="email_address1">Monthly Target</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="mtarget"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         
                                                  
                                                        <label for="email_address1">Actual Revenue / Expenditure</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="actualrev_exp"  required="required" 
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
                          </div>
                          
                          
                          
                         
                          
                          
                          
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    
                             
                                    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog"
                                        aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">Search Record</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('sreturnexpenditure') }}" autocomplete="off">
                                @csrf
                                                        <label for="email_address1">Date From</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="fdate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        <label for="email_address1">Date To</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="tdate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                         
                                                        
                                                       
                                                       
                                                        
                                                      
                                                       
                                                        <br>
                                                                                                            <button type="submit"
                                                        class="btn btn-info waves-effect" >Search</button>

                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          </div>
              
                          
                          
                          </p>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-hover table-bordered js-basic-example contact_list" style="font-size:12px">
                                    <thead>
                                        <tr>
                                            <th class="">#</th>
                                           
                                            <th class=""> Date </th>
                                             <th class=""> Revenue Code </th>
                                             <th class="">Description</th>
                                            <th class="">Approve Budget</th>
                                            <th class=""> Monthly Target </th>
                                            <th class=""> Actual Revenue/Expenditure </th>
                                             
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cashrs  as $cashbook )
                                      

                                        <tr class="odd gradeX">
                                            <td class="table-img "> {{$loop->iteration}}</td>
                                             <td class=""> {{ date('d-M-Y', strtotime($cashbook->rdate)) }} </td>
                                             <td class=""> {{ $cashbook->rcode }}</td>
                                              <td class=""> {{ $cashbook->description }}</td>
                                            <td class=""> {{ $cashbook->appbudget }}</td>
                                            <td class="">  {{ $cashbook->mtarget }}</td>
                                            <td class="">{{ $cashbook->actualrev_exp }} </td>
                                          
                                            
                                        </tr> @endforeach
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