@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Payroll</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Payroll</a>
                            </li>
                            <li class="breadcrumb-item active">View Payroll</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>View</strong> Payroll  for {{  $dept_name }}, {{ $month }} {{ $year }}</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="center"> Fullnames </th>
                                            <th class="center"> Directorate </th>
                                            <th class="center"> Basic Salary</th>
                                            <th class="center"> Total Emolument</th>
                                            
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($allpayerecs  as $emp )
                                        <tr class="odd gradeX">
                                            <td class="table-img center">{{$loop->iteration}}</td>
                                            <td class="center">{{ $emp->fullnames }} </td>
                                            <td class="center">{{ $emp->deptname }}</td>
                                            <td class="center">{{ $emp->basic_sal }}</td>
                                            <td class="center">{{ $emp->total_emolument }}</td>
                                           
                                            <td class="center">
                                               
                                               <a href="{{URL::to('/viewpayslip/'.$emp->eid.'/'.$emp->dept.'/'.$emp->month.'/'.$year) }}" class="btn btn-tbl-edit">
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