@extends('apphead')
 
@section('contents')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Departments</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Departments</a>
                            </li>
                            <li class="breadcrumb-item active">All Departments</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            
                                <p>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    
                              <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Add New Department<i class="material-icons">add</i> </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="formModal">New Department</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="form-signin" method="post"   action="{{ route('adddept') }}" autocomplete="off">
                                @csrf
                                                        <label for="email_address1">Department Name</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                    placeholder="Enter Department Name"
                                                                   name="deptname"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                        
                                                        <label for="email_address1">Head of Department Name</label>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text"  
                                                                    class="form-control"
                                                                    placeholder="Enter Head of Department Name"
                                                                   name="depthead"  required="required" 
     >
                                                            </div>
                                                        </div>
                                                         
                                                       
                                                        <br>
                                                                                                            <button type="submit"
                                                        class="btn btn-info waves-effect" >Save</button>

                                                  </form>
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                          </div></p>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="center">Department Name </th>
                                            <th class="center"> Head Of Department </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($depts  as $dept )
                                        <tr class="odd">
                                            <td class="center">{{$loop->iteration}}</td>
                                            <td class="center">{{ $dept->deptname }}</td>
                                            <td class="center">{{ $dept->depthead }}</td>
                                            <td class="center">
                                                <a href="{{URL::to('/editdept/'.$dept->deptid) }}" class="btn btn-tbl-edit">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                
                                            </td>
                                        </tr>@endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	