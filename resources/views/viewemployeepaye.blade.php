@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">PAYE</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">PAYE Computation</a>
                            </li>
                            <li class="breadcrumb-item active">Employee PAYE</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>View</strong> Employee PAYE Details</h2>
                           
                        </div>
                        <div class="body">
                           <form class="form-signin" method="post"   action="{{ route('updateemployeepaye') }}" autocomplete="off">
                                @csrf
                                                       
                                                       
                                                       <div class="row clearfix">
                                                       <input name="pid" type="hidden" value="{{ $emps->pluck('pid')->implode(', ') }}" /> <input name="eid" type="hidden" value="{{ $emps->pluck('eid')->implode(', ') }}" />
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
                                            <label for="email_address1">Othername</label>
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
                                        <div class="form-line">
                                            <label for="email_address1">Bank</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
    
     
     <select class="form-control select2" data-placeholder="Select" name="bank"  required="required" >
                                            <option>{{ $emps->pluck('bank')->implode(', ') }}</option>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                           <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">Bank Account</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="accountno"  
     value="{{ $emps->pluck('accountno')->implode(', ') }}">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @php 
                                if (empty($sal)){ 
                                $basic = 0;
                                $peculiar = 0;
                                 $rent = 0;
                                
                                }else{
                                $basic = $sals->pluck('amount')[0];
                                $peculiar = $sals->pluck('amount')[1];
                                $rent = $sals->pluck('amount')[2];
                                }
                                
                                
                                @endphp
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">Basic salary</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="basic_sal"  
     value="{{ number_format($basic,2) }}" readonly="readonly">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">Peculiar Allowance</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="peculiar"  
     value="{{ number_format($peculiar,2) }}" readonly="readonly">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">Rent</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="rent"  
     value="{{ number_format($rent,2) }}" readonly="readonly">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                      
                             
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="email_address1">TOTAL</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                   
                                                                   name="reliefs_allowances"  
     value="{{ number_format(($basic+$peculiar+$rent),2) }}" readonly="readonly">
                                                            </div>
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                          
           <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15">Update Employee Paye Details</button>
                                <a href="{{URL::to('/viewpayecomp') }}" class="btn btn-danger waves-effect">Go Back</a>
                                
                            </div>

                                                  </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	