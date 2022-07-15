@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Weekly Mandate</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Weekly Mandate</a>
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
                                                    <h5 class="modal-title" id="formModal">New Weekly Mandate</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('addweeklymandate') }}" autocomplete="off">
                                @csrf
                                                       
                                                        <label for="email_address1">Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="tdate"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                        
                                                        <label for="email_address1">Beneficiary</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="beneficiary"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Account No</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="acctno"   required="required"
     >
                                                            </div>
                                                        </div>
                                                          
                                                         
                                                       
                                                       
                                                        
                                                        <label for="email_address1">Bank</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
    
     
     <select class="form-control select2" data-placeholder="Select" name="bank_cash"  required="required" >
                                            <option value="">Select Bank</option>
                                            <option>Citibank Nigeria Limited</option>
<option>Ecobank Nigeria Plc</option>
<option>Fidelity Bank Plc</option>
<option>First City Monument Bank Plc</option>
<option>Guaranty Trust Bank Plc</option>
<option>Key Stone Bank</option>
<option>Polaris Bank</option>
<option>Stanbic IBTC Bank Ltd.</option>
<option>Standard Chartered Bank Nigeria Ltd.</option>
<option>Sterling Bank Plc</option>
<option>SunTrust Bank Nigeria Limited</option>
<option>Union Bank of Nigeria Plc</option>
<option>United Bank For Africa Plc</option>
<option>Unity  Bank Plc</option>
<option>Wema Bank Plc</option>
<option>Zenith Bank Plc</option>
<option>Heritage Banking Company Ltd.</option>
<option>ACCESS BANK PLC</option>
<option>FIRST BANK NIGERIA LIMITED</option>
<option>Providus Bank</option>
<option>Titan Trust Bank Ltd</option>
<option>Globus Bank Limited</option>
                                   
                                        </select>
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
                                                    <h5 class="modal-title" id="formModal">Search Weekly Mandate</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('sweeklymandate') }}" autocomplete="off">
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
                                                        class="btn btn-info waves-effect" >Search Weekly Mandate</button>

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
                                             <th class=""> Beneficiary </th>
                                             <th class=""> Account No</th>
                                            <th class="">Bank</th>
                                            <th class=""> Amount </th>
                                            <th class=""> Remarks </th>
                                             
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cashrs  as $cashbook )
                                      

                                        <tr class="odd gradeX">
                                            <td class="table-img "> {{$loop->iteration}}</td>
                                             <td class=""> {{ date('d-M-Y', strtotime($cashbook->tdate)) }} </td>
                                             <td class=""> {{ $cashbook->beneficiary }}</td>
                                              <td class=""> {{ $cashbook->acctno }}</td>
                                            <td class=""> {{ $cashbook->bank_cash }}</td>
                                            <td class="">  {{ $cashbook->amount }}</td>
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