<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>TCTI - Personnel, Payroll & Account </title>
    
    <!-- Plugins Core Css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ asset('css/styles/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="light">
 
   <div class="container-fluid"><div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h5>
                                NAME OF ORGANISATION: TEACHERS CONTINUOUS TRAINING INSTITUTE, BIASE<BR>PAYE COMPUTATION - {{ $month }} {{ $year }} <BR>ACCOUNT</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-bordered" style="font-size:12px">
                         
                              
                                    <thead>
                                     
                                        <tr>
                                          <th colspan="14" class="center">CONSOLIDATED</th>
                                        </tr>
                                        <tr>
                                            <th class="center">S/N</th>
                                            
                                            <th class="center"> Employee's Name</th>
                                            <th class="center"> Basic Salary</th>
                                            <th class="center"> Total Emolument</th>
                                             <th class="center"> MTH</th>
                                              <th class="center"> Relief Allowance</th>
                                               <th class="center"> Reliefs & Allowances</th>
                                                <th class="center"> Chargeable Income</th>
                                                 <th class="center"> Tax Liability</th>
                                                  <th class="center"> Tax Payable</th>
                                                   <th class="center"> Tax Probated</th>
                                                    <th class="center"> Net Earnings</th>
                                                     <th class="center"> Bank</th>
                                                     <th class="center"> Account Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($allpayerecs  as $allpayerec )
                                        <tr class="odd gradeX">
                                            <td class="table-img center">{{$loop->iteration}}</td>
                                            <td class="center">{{ $allpayerec->fullnames }}</td>
                                            <td class="center">{{ $allpayerec->basic_sal }}</td>
                                            <td class="center">{{ $allpayerec->total_emolument }}</td>
                                            <td class="center">{{ $allpayerec->month }}</td>
                                            <td class="center">{{ $allpayerec->relief_allowance }}</td>
                                            <td class="center">{{ $allpayerec->reliefs_allowances }}</td>
                                            <td class="center">{{ $allpayerec->chargeable_income }}</td>
                                            <td class="center">{{ $allpayerec->tax_liability }}</td>
                                            <td class="center">{{ $allpayerec->tax_payable }}</td>
                                            <td class="center">{{ $allpayerec->tax_probated }}</td>
                                            <td class="center">{{ $allpayerec->net_earnings }}</td>
                                            <td class="center">{{ $allpayerec->bank }}</td>
                                            <td class="center">{{ $allpayerec->accountno }}</td>
                                        </tr> @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                            </div>
              </div>
                    </div>
                
        </div>

     
</body>
  

</html>