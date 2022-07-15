@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">CashBook</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">CashBook</a>
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
                                                    <h5 class="modal-title" id="formModal">New CashBook Record</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('addcashbook') }}" autocomplete="off">
                                @csrf
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
                                                        
                                                        <label for="email_address1">Folio</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="folio"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        <label for="email_address1">Cash</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="cash"   required="required"
     >
                                                            </div>
                                                        </div>
                                                         <label for="email_address1">Bank</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
    
     
     <select class="form-control select2" data-placeholder="Select" name="bank"  required="required" >
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
                                                         
                                                        <label for="email_address1">Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="cdate"  required="required" 
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
                                                        
                                                      <label for="email_address1">Folio</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="folio2"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <label for="email_address1">Cash</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="cash2"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         
                                                         <label for="email_address1">Bank</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                 <select class="form-control select2" data-placeholder="Select" name="bank2"  required="required" >
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
                                                    <h5 class="modal-title" id="formModal">Search Cash Book</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('scashbook') }}" autocomplete="off">
                                @csrf
                                                        <label for="email_address1">Month</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="form-control select2" data-placeholder="Select" name="cmonth"  required="required" >
<option value="">Select Month</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
                                   
                                        </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <label for="email_address1">Year</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="form-control select2" data-placeholder="Select" name="cyear"  required="required" >
<option value="">Select Month</option>
 @foreach ($dyears  as $dyear )
                                            <option value="{{ $dyear->dateyear }}">{{ $dyear->dateyear  }}  </option>
                                          @endforeach
                                   
                                        </select>
                                                            </div>
                                                        </div>
                                                        
                                                         
                                                        
                                                       
                                                       
                                                        
                                                      
                                                       
                                                        <br>
                                                                                                            <button type="submit"
                                                        class="btn btn-info waves-effect" >Search Cashbook</button>

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
                                           
                                            <th class=""> Payee </th>
                                             <th class=""> Folio </th>
                                             <th class=""> Cash</th>
                                            <th class="">Bank</th>
                                            <th class=""> Date </th>
                                            <th class=""> Description </th>
                                            <th class=""> Folio </th>
                                            <th class=""> Cash</th>
                                            <th class="">Bank</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($cashbooks  as $cashbook )
                                        <tr class="odd gradeX">
                                            <td class="table-img "> {{$loop->iteration}}</td>
                                             <td class=""> {{ $cashbook->surname }} {{ $cashbook->firstname }} {{ $cashbook->othername }}</td>
                                             <td class=""> {{ $cashbook->folio }}</td>
                                              <td class=""> {{ $cashbook->cash }}</td>
                                            <td class=""> {{ $cashbook->bank }}</td>
                                            <td class="">  {{ date('d-M-Y', strtotime($cashbook->cdate)) }}</td>
                                            <td class="">{{ $cashbook->description }} </td>
                                           <td class=""> {{ $cashbook->folio2 }}</td>
                                              <td class=""> {{ $cashbook->cash2 }}</td>
                                            <td class=""> {{ $cashbook->bank2 }}</td>
                                            
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