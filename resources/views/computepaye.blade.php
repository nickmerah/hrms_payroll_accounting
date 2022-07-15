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
            </div><div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Compute</strong> Paye</h2>
                            
                        </div><form class="form-signin" method="post"   action="{{ route('computepayepermonth') }}" autocomplete="off">
                                @csrf
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          
     <select class="form-control select2" data-placeholder="Select" name="pmonth"  required="required" >
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
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control select2" data-placeholder="Select" name="dept"  required="required" >
                                            <option value="">Select Directorate</option>
                                             @foreach ($depts  as $dept )
                                            <option value="{{ $dept->deptid }}">{{ $dept->deptname }}</option>
                                          @endforeach
                                   
                                        </select>  
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="computedate" type="date" class="form-control" id="deadline" required="required">  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="col-lg-8">
                                        <button class="btn btn-default submit">Compute</button>
                                    </div>
                                </div>
                            </div>
                        </div></form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="table-responsive">
                             
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                     
                                        <tr>
                                            <th class="center">#</th>
                                            
                                            <th class="center"> Directorate </th>
                                            <th class="center"> Month</th>
                                            <th class="center"> Date Computed</th>
                                            
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($allpayerecs  as $allpayerec )
                                        <tr class="odd gradeX">
                                            <td class="table-img center">{{$loop->iteration}}</td>
                                            <td class="center">{{ $allpayerec->deptname }}</td>
                                            <td class="center">{{ $allpayerec->month }}</td>
                                            
                                            <td class="center">{{ $allpayerec->date_computed }}</td>
                                             
                                            <td class="center">
                                               
                                               <a href="{{URL::to('/viewcomputepaye/'.$allpayerec->month.'/'.$allpayerec->dept) }}" class="btn btn-tbl-edit" target="_blank">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                
                                                <a href="{{URL::to('/removecomputepaye/'.$allpayerec->month.'/'.$allpayerec->dept) }}" class="btn btn-tbl-delete" onclick='return confirm("Are you sure, you want to delete this record?")'>
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                                 
                                            </td>
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