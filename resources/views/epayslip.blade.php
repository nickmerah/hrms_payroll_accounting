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
                                <a href="#" onClick="return false;">Payroll</a>
                            </li>
                            <li class="breadcrumb-item active">Payslip</li>
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
                                            <b>PAYSLIP</b>
                                            <span class="float-end">{{ $month}},  {{ $year}} </span>
                                        </h3>
                                        <hr>
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
                                                       
                                                        <p class="font-bold addr-font-h4">{{ $epayroll->pluck('fullnames')->implode(', ') }}</p>
                                                        <p class="text-muted m-l-30">
                                                            {{ $epayroll->pluck('deptname')->implode(', ') }}
                                                          
                                                            <br> {{ $epayroll->pluck('bank')->implode(', ') }},
                                                            <br> {{ $epayroll->pluck('accountno')->implode(', ') }}
                                                              <br> {{ $month }}, {{ $year }}
                                                        </p>
                                                        <p class="m-t-30">
                                                            <b>Computed Date :</b>
                                                            <i class="fa fa-calendar"></i> {{ date('d-M-Y', strtotime($epayroll->pluck('date_computed')->implode(', '))) }}
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
                                                                        <td class="text-center">&#8358;{{ $bsal = $epayroll->pluck('basic_sal')->implode(', ') }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">2</td>
                                                                        <td class="text-center">Relief Allowance</td>
                                                                        <td class="text-center">&#8358;{{ $ra = $epayroll->pluck('relief_allowance')->implode(', ') }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">3</td>
                                                                        <td class="text-center">Reliefs and Allowances
                                                                        </td>
                                                                        <td class="text-center">&#8358;{{ $rna = $epayroll->pluck('reliefs_allowances')->implode(', ') }}</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th class="center"> Total </th>
                                                                        <th class="center"> </th>
                                                                        <th class="center"> &#8358;{{$tote =  number_format($bsal+$ra+$rna) }} </th>
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
                                                                        <td class="text-center">&#8358;{{ $tl = $epayroll->pluck('tax_liability')->implode(', ') }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">2</td>
                                                                        <td class="text-center">Tax Payable </td>
                                                                        <td class="text-center">&#8358;{{ $tp = $epayroll->pluck('tax_payable')->implode(', ') }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">3</td>
                                                                        <td class="text-center">Tax Probated</td>
                                                                        <td class="text-center">&#8358;{{ $txp = $epayroll->pluck('tax_probated')->implode(', ') }}</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th class="center"> Total </th>
                                                                        <th class="center"> </th>
                                                                        <th class="center">  &#8358;{{$tott =  number_format($tp+$tl+$txp)}} </th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="float-end m-t-30 text-end">
                                                    <p>Total Earning: &#8358;{{ number_format($bsal+$ra+$rna) }}</p>
                                                    <p>Deductions : &#8358;{{ number_format($tp+$tl+$txp) }} </p>
                                                    <hr>
                                                    <h3>
                                                        <b>Total :</b> &#8358;{{ number_format($bsal+$ra+$rna - $tp+$tl+$txp) }}</h3>
                                                </div> 
                                                <div class="clearfix"></div>
                                                <hr>
                                                <div class="text-end">
                                                  
                                                    <button type="button"
                                                        class="btn btn-info btn-border-radius waves-effect">Print</button>
                                                </div>
                                            </div>
                                        </div>
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