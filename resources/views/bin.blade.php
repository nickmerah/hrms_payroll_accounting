@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Bin Card</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Bin Card</a>
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
                                                    <h5 class="modal-title" id="formModal">New BIN Card</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('addbin') }}" autocomplete="off">
                                @csrf
                                                       
                                                        <label for="email_address1">Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="bdate"  required="required" 
     >
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
                                                        
                                                          
                                                         
                                                       
                                                        <label for="email_address1">Directorate</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                              
                                                              <select class="form-control select2" data-placeholder="Select" name="unit"  id = "unit" required="required" >
                                            <option></option>
                                             @foreach ($depts  as $dept )
                                            <option value="{{ $dept->deptid }}">{{ $dept->deptname  }} </option>
                                          @endforeach
                                   
                                        </select>  
                                                              
                                                              
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                      <label for="email_address1">Part No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="partno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <label for="email_address1">No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="no"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         
                                                   <label for="email_address1">Maximum Stock</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="maxstock"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Minimum Stock</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="minstock"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Re-order Level</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="rlevel"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Receipt SRV.No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="rsrvno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Receipt Quantity</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="rqty"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Issues SRV.No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="isrvno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Issues Quantity</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="iqty"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Balance Quantity </label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="bqty"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Outstanding Order Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="odate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Order No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="orderno"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Quantity Order No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="oqty"  required="required" 
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
                                                    <h5 class="modal-title" id="formModal">Search BIN Card</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('sbin') }}" autocomplete="off">
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
                                                        
                                                        
                                                          <label for="email_address1">Directorate</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                              
                                                              <select class="form-control select2" data-placeholder="Select" name="unit"  id = "unit" required="required" >
                                            <option></option>
                                             @foreach ($depts  as $dept )
                                            <option value="{{ $dept->deptid }}">{{ $dept->deptname  }} </option>
                                          @endforeach
                                   
                                        </select>  
                                                              
                                                              
                                                                
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
                                             <th class=""> Description </th>
                                             <th class=""> Directorate</th>
                                            <th class="">Partno</th>
                                            <th class=""> No </th>
                                            <th class=""> Max. Stock </th>
                                            <th class=""> Min. Stock </th>
                                            <th class=""> Reorder Level </th>
                                             <th class=""> Receipt SRVNo </th>
                                              <th class="">  ReceiptQty </th>
                                               <th class=""> Issues SRVNo </th>
                                                <th class=""> IssuesQty </th>
                                                 <th class=""> BalanceQty </th>
                                                 <th class=""> Oust. Date </th>
                                                 <th class=""> OrderNo </th>
                                                 <th class=""> Qty OrderNo </th>
                                                 <th class=""> Remarks </th>
                                                 
                                             
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cashrs  as $cashbook )
                                      

                                        <tr class="odd gradeX">
                                            <td class="table-img "> {{$loop->iteration}}</td>
                                             <td class=""> {{ date('d-M-Y', strtotime($cashbook->bdate)) }} </td>
                                             <td class=""> {{ $cashbook->description }}</td>
                                              <td class=""> {{ $cashbook->deptname }}</td>
                                            <td class=""> {{ $cashbook->partno }}</td>
                                            <td class="">  {{ $cashbook->no }}</td>
                                            <td class="">{{ $cashbook->maxstock }} </td>
                                            <td class=""> {{ $cashbook->minstock }}</td>
                                            <td class="">  {{ $cashbook->rlevel }}</td>
                                             
                                            <td class=""> {{ $cashbook->rsrvno }}</td>
                                            <td class="">  {{ $cashbook->rqty }}</td>
                                            <td class="">{{ $cashbook->isrvno }} </td>
                                            <td class=""> {{ $cashbook->iqty }}</td>
                                            <td class="">  {{ $cashbook->bqty }}</td>
                                            <td class="">{{ date('d-M-Y', strtotime($cashbook->odate)) }} </td>
                                            <td class=""> {{ $cashbook->orderno }}</td>
                                            <td class="">  {{ $cashbook->oqty }}</td>
                                            <td class="">{{ $cashbook->remarks }} </td>
                                           
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