@extends('admin.layout.master')
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Book</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Book</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-3">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Book</h3>
                
              
                <a href="{{route('book.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('admin.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>PDF</th>
                  
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                    @foreach ($book as $key=>$item) 
                   
                  <tr>
                    <td>{{++$key}}</td>
                    <td> <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="{{$item->title}}" style="max-width:250px"></td>
                   <td>{{@$item->title}}</td>

                   <td><a href="{!!@$item->link!!}">{!!@$item->link!!}</a></td>
                   <td><a href="{{(!empty($item->pdf))?URL::to('storage/'.$item->pdf):URL::to('image/no_image.png')}}">{{@$item->pdf}}</a></td>
          
                   <td>
            
                      <a href="{{route('book.edit',[$item])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                      <form action="{{route('book.destroy',[$item])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                         
                    </td>
                   
                  </tr>
                
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>PDF</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection