@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Voucher Registrar</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Voucher Registrar</a>
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
                                                   <form class="form-signin" method="post"   action="{{ route('addvregistrar') }}" autocomplete="off">
                                @csrf
                                                       
                                                        <label for="email_address1">PV Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="pvdate"  required="required" 
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
                                                        
                                                        <label for="email_address1">Description</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="description"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Approval Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                  <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="appdate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                          
                                                         
                                                       
                                                       
                                                        
                                                        <label for="email_address1">Payment Code</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="pcode"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                      <label for="email_address1">PV No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="pvno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <label for="email_address1">Amount</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="amount"  required="required" 
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
                                                   <form class="form-signin" method="post"   action="{{ route('svregistrar') }}" autocomplete="off">
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
                                           
                                            <th class=""> PV Date </th> 
                                            <th class=""> Payee</th>
                                             <th class=""> Description </th>
                                            
                                            <th class="">Approval Date</th>
                                            <th class=""> Payment Code</th>
                                            <th class=""> PV No </th>
                                            <th class=""> Amount </th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cashrs  as $cashbook )
                                      

                                        <tr class="odd gradeX">
                                            <td class="table-img "> {{$loop->iteration}}</td>
                                             <td class=""> {{ date('d-M-Y', strtotime($cashbook->pvdate)) }} </td>
                                             <td class=""> {{ $cashbook->surname }} {{ $cashbook->firstname }} {{ $cashbook->othername }}</td>
                                              <td class=""> {{ $cashbook->description }}</td>
                                            <td class=""> {{ date('d-M-Y', strtotime($cashbook->appdate)) }}</td>
                                            <td class="">  {{ $cashbook->pcode }}</td>
                                            <td class="">{{ $cashbook->pvno }} </td>
                                           <td class=""> {{ $cashbook->amount }}</td>
                                                                                      
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