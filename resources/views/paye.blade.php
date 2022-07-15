@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> PAYE</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Payee</a>
                            </li>
                            <li class="breadcrumb-item active">PAYE Computation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-hover js-basic-example contact_list" style="font-size:12px">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="center"> Fullnames </th>
                                            <th class="center"> Directorate </th>
                                            <th class="center"> Basic Salary</th>
                                           
                                            <th class="center">Bank</th>
                                             <th class="center">Account No</th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($emps  as $emp )
                                        <tr class="odd gradeX">
                                            <td class="table-img center">{{$loop->iteration}}</td>
                                            <td class="center">{{ $emp->surname }} {{ $emp->firstname }} {{ $emp->othername }}</td>
                                            <td class="center">{{ $emp->deptname }}</td>
                                            
                                            @php
                                $basic_sal = \App\Models\SalaryTable::where('salarystructure',$emp->salarystructure) 			                        ->where('salarygrade',$emp->salarygrade)
						->where('salarylevel',$emp->salarylevel)
						->select('amount')
						->sum('amount');
                             
                           
                               
                            @endphp
                                            
                                            <td class="center">{{ number_format($basic_sal,2) }}</td>
                                          
                                            <td class="center">{{ $emp->bank }}</td>
                                            <td class="center">{{ $emp->accountno }}</td>
                                            <td class="center">
                                               
                                               <a href="{{URL::to('/viewpaye/'.$emp->eid) }}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                            </td>
                                        </tr>@endforeach
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