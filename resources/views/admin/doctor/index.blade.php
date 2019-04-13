@extends('master.app')

@section('title',"View Doctor")

@push('css')
 

  <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/font-awesome.min.css')}}">



   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/select2.min.css')}}">


@endpush

@section('content')

   <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctor</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{route('admin.doctor.create')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-border table-striped custom-table datatable mb-0">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Specialist</th>
                    <th>Phone</th>
                    <th>Fee</th>
                    <th class="text-right">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($datas as $key=>$data)

                 
                  <tr>
                     <td>{{$key+1}}</td>
                    <td><img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt="">{{$data->user->name}}</td>
                    
                  
                   
                   
                    <td>{{$data->user->email}}</td>
                    <td>{{$data->speciality}}</td>
                    <td>{{$data->mobile}}</td>
                    
                    <td>{{$data->fee}}</td>
                   

                    
                  
                    <td class="text-right">
                      <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="{{route('admin.doctor.edit',$data->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                          <a class="dropdown-item" href="{{route('admin.doctor.destroy',$data->id)}}" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
                </div>
            </div>
            
        </div>
            

@endsection



@push('js')





    <script src="{{asset('backend/assets/js/select2.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap-datetimepicker.min.js')}}"></script>


    
  

@endpush

