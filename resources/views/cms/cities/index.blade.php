@extends('cms.parent')
@section('page-tittle','Dashboard')

@section('lg-tittle','large')
@section('main-tittle','Main' )
@section('sm-tittle','Small')

@section('styles')
  
@endsection
@section('content')
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th style="width: 5px">#</th>
                      <th>English Name </th>
                      <th>Arabic Name </th>
                      <th>Active </th>
                      <th style="width: 40px">Settings</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cities as $city)
                    <tr>
                      <td>{{$loop->index + 1}}</td>
                      <td>{{$city->name_en}}</td>
                      <td>{{$city->name_ar}} </td>
                      
                      {{-- <td><span class="badge @if($city->active) bg-success @else bg-danger @endif">@if($city->active) Active @else IN-Active @endif</span></td> --}}
                      <td>
                        <span class="badge @if($city->active) bg-success @else bg-danger @endif">{{$city->active_key}}</span></td>
                      <td><div class="btn-group">
                        <a href="{{route('cities.edit',$city->id)}}" class="btn btn-warning ">
                          <i class="fas fa-edit"></i>
                        </a>
                        {{-- <a href="{{route('cities.destroy',$city->id)}}" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                       --}}
                       <form method="POST" action="{{route('cities.destroy',$city->id)}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                                          </form>
                      </div> </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        
        </div>
         <!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

 
@section('scripts')
  
@endsection