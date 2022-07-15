@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">PAYE </h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">PAYE</a>
                            </li>
                            <li class="breadcrumb-item active">PAYE Computation</li>
                        </ul>
                    </div>
                </div>
            </div><form class="form-signin" method="post"   action="{{ route('view_compute_paye') }}" autocomplete="off">
                                @csrf
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>View</strong> PAYE Computation</h2>
                            
                        </div>@include('flash-message')
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                         
                                            
                                           
                                                        <div class="form-group">
                                                            <div class="form-line">
    
      <label for="email_address1">Month</label>
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
                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
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
                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                     <div class="form-group">
                                        <label for="email_address1">Date</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            
                                                                <input type="date"  
                                                                    class="form-control"
                                                                   
                                                                   name="cdate"  required="required" 
   >
                                                            </div>
                                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                    <div class="col-lg-8">
                                        <button class="btn btn-default submit">View Computation</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div></form>
    </section>
@endsection	