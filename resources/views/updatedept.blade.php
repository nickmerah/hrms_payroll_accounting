@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Edit Department</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Departments</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Department</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Edit</strong> Department</h2>
                            
                        </div><form class="form-signin" method="post"   action="{{ route('updatedept') }}" autocomplete="off">
                                @csrf
                        <div class="body">
                        
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="deptname" type="text" required="required" class="form-control" id="deptname" value="{{ $depts->deptname }}">
                                            <label class="form-label">Department Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input name="depthead" type="text" required="required" class="form-control" id="depthead" value="{{ $depts->depthead }}">
                                            <label class="form-label">Head of Department</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <input name="deptid" type="hidden" value="{{ $depts->deptid }}" />

                            
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15">Update</button>
                                
                            </div>
                        </div></form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	