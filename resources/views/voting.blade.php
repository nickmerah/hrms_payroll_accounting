@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Votting</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Votting</a>
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
                                                    <h5 class="modal-title" id="formModal">New Votting</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('addvoting') }}" autocomplete="off">
                                @csrf
                                                       
                                                        <label for="email_address1">Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="vdate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                        
                                                        <label for="email_address1">Head No </label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="headno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                          
                                                         
                                                        
                                                        
                                                        
                                                        
                                                      <label for="email_address1">SubHead No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="subheadno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <label for="email_address1">Amount authorized for Expenditure</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="authamt"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         
                                                   <label for="email_address1">Services</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="services"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Expenditures</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="expenditures"  required="required" 
     >
                                                            </div>
                                                        </div><hr>
                                                         <label for="email_address1">PvNo</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="pvno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Payee</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="form-control select2" data-placeholder="Select" name="payee"  id = "payee" required="required" >
                                            <option></option>
                                             @foreach ($payees  as $payee )
                                            <option value="{{ $payee->eid }}">{{ $payee->surname  }} {{ $payee->firstname }} {{ $payee->othername  }} - {{ $payee->deptname }} - {{ $payee->positionname }} </option>
                                          @endforeach
                                   
                                        </select>  
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Payment</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="payment"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Cummulative</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="cum"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Particulars</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="particulars"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                      
                                                         <label for="email_address1">Remarks</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="remarks"  required="required" 
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
                                                    <h5 class="modal-title" id="formModal">Search Votting</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('svoting') }}" autocomplete="off">
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
                                                        class="btn btn-info waves-effect" >Search </button>

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
                                             <th class=""> Head No </th>
                                             <th class=""> Subhead No</th>
                                            <th class="">Exp. Amout</th>
                                            <th class=""> Services </th>
                                            <th class="">Expenditures </th>
                                            <th class=""> Pv No </th>
                                            <th class=""> Payee</th>
                                             <th class=""> Payment </th>
                                              <th class="">  Cum </th>
                                               <th class=""> Balance </th>
                                                <th class=""> Particulars </th>
                                                 <th class=""> Remarks </th>
                                                 
                                             
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cashrs  as $cashbook )
                                      

                                        <tr class="odd gradeX">
                                            <td class="table-img "> {{$loop->iteration}}</td>
                                             <td class=""> {{ date('d-M-Y', strtotime($cashbook->vdate)) }} </td>
                                             <td class=""> {{ $cashbook->headno }}</td>
                                              <td class=""> {{ $cashbook->subheadno }}</td>
                                            <td class=""> {{ $cashbook->authamt }}</td>
                                            <td class="">  {{ $cashbook->services }}</td>
                                            <td class="">{{ $cashbook->expenditures }} </td>
                                            <td class=""> {{ $cashbook->pvno }}</td>
                                            <td class="">  {{ $cashbook->surname }} {{ $cashbook->firstname }} {{ $cashbook->othername }}</td>
                                             
                                            <td class=""> {{ $cashbook->payment }}</td>
                                            <td class="">  {{ $cashbook->cum }}</td>
                                            <td class="">{{ $cashbook->balance }} </td>
                                            <td class=""> {{ $cashbook->particulars }}</td>

                                            <td class="">{{ $cashbook->remark }} </td>
                                   
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