@extends('apphead')
 
@section('contents')
    <section class="content">
      <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Position</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Position</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Position</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                         <div class="header">
                            <h2>
                                <strong>Edit</strong> Position</h2>
                                </div>
                    <form class="form-signin" method="post"   action="{{ route('updateposition') }}" autocomplete="off">
                                @csrf   <div class="body">
                        <div class="row clearfix">
                          <div class="col-sm-12">
                                  <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $positions->positionname }}" name="position" id="date1" required="required">
                                        
                                        <input name="pid" type="hidden" value="{{ $positions->pid }}" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 p-t-20 text-center">
                          <button type="submit" class="btn btn-warning waves-effect m-r-15">Update</button>
                                
                        </div>
                        </div></form>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection	