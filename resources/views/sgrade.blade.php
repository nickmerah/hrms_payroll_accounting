@extends('apphead')
 
@section('contents')
    <section class="content">
      <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Salary Grade</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{URL::to('/welcome') }}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Salary Grade</a>
                            </li>
                            <li class="breadcrumb-item active">All Salary Grade</li>
                        </ul>
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
                                            <th>#</th>
                                            <th>Salary Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>  @foreach ($grades  as $grade )
                                        <tr class="odd">
                                        
                                       
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $grade->sgradename }}</td>
                                        </tr> @endforeach
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