@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Payslip</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Payslip</a>
                            </li>
                            <li class="breadcrumb-item active">All Payslip</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="white-box">
                                        <h3>
                                            <b>PAYSLIP - {{ $dept_name}}</b>
                                            <span class="float-end">{{ $month}},  {{ $year}} </span>
                                        </h3>
                                        <hr>
                                        
               @foreach ($epayslips  as $epayslip )                          
                                        
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="float-start">
                                                    <address>
                                                        <img src="{{ asset('images/invoice_logo.png') }}" alt="logo"
                                                            class="logo-default" />
                                                        <p class="text-muted m-l-5">
                                                           Biase, Cross River State
                                                            <br> Nigeria
                                                            <br> info@tctibiase.com.ng
                                                             
                                                        </p>
                                                    </address>
                                                </div>
                                                <div class="float-end text-end">
                                                    <address>
                                                       
                                                        <p class="font-bold addr-font-h4">{{ $epayslip->fullnames }}</p>
                                                        <p class="text-muted m-l-30">
                                                            {{ $epayslip->deptname }}
                                                          
                                                            <br> {{ $epayslip->bank }},
                                                            <br> {{ $epayslip->accountno }}
                                                              <br> {{ $month }}, {{ $year }}
                                                        </p>
                                                        <p class="m-t-30">
                                                            <b>Computed Date :</b>
                                                            <i class="fa fa-calendar"></i> {{ date('d-M-Y', strtotime($epayslip->date_computed)) }}
                                                        </p>
                                                         
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-l-30">
                                                <div class="card">
                                                    <div class="header bg-light-blue">
                                                        <h2>
                                                            Earning
                                                        </h2>
                                                    </div>
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">#</th>
                                                                        <th class="text-center">Earning</th>
                                                                        <th class="text-center">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">Basic Salary</td>
                                                                        <td class="text-center">&#8358;{{ $bsal = $epayslip->basic_sal }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">2</td>
                                                                        <td class="text-center">Relief Allowance</td>
                                                                        <td class="text-center">&#8358;{{ $ra = $epayslip->relief_allowance }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">3</td>
                                                                        <td class="text-center">Reliefs and Allowances
                                                                        </td>
                                                                        <td class="text-center">&#8358;{{ $rna = $epayslip->reliefs_allowances }}</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th class="center"> Total </th>
                                                                        <th class="center"> </th>
                                                                        <th class="center"> &#8358; 
                                                                        @php
                                                                        $tote =  $bsal+$ra+$rna;
                                                                        @endphp
                                                                        {{ number_format($tote) }}</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-r-30">
                                                <div class="card">
                                                    <div class="header bg-red">
                                                        <h2>Deductions
                                                        </h2>
                                                    </div>
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">#</th>
                                                                        <th class="text-center">Deductions</th>
                                                                        <th class="text-center">Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">Tax Liability</td>
                                                                        <td class="text-center">&#8358;{{ $tl = $epayslip->tax_liability }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">2</td>
                                                                        <td class="text-center">Tax Payable </td>
                                                                        <td class="text-center">&#8358;{{ $tp = $epayslip->tax_payable }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">3</td>
                                                                        <td class="text-center">Tax Probated</td>
                                                                        <td class="text-center">&#8358;{{ $txp = $epayslip->tax_probated }}</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th class="center"> Total </th>
                                                                        <th class="center"> </th>
                                                                        <th class="center">  &#8358; @php
                                                                        $tott =  $tp+$tl+$txp;
                                                                        @endphp
                                                                        {{  number_format($tott)}}</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="float-end m-t-30 text-end">
                                                    <p>Total Earning: &#8358; {{  number_format($tote)}}</p>
                                                    <p>Deductions : &#8358; {{  number_format($tott)}}</p>
                                                    <hr>
                                                    <h4>
                                                        <b>Net Pay :</b> &#8358; {{ number_format($tote - $tott)}}</h4>
                                                </div> 
                                                <div class="clearfix"></div>
                                                <hr>
                                                
                                            </div>
                                        </div>
                                        
                                        
                   @endforeach                     
                                        
                                        
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	