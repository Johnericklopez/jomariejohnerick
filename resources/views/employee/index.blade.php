@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="card card-primary"  style="margin-left:10px; margin-right:80px;width:80%;">
              <div  style="Background-color:blue;" class="card-header " >
                <h3  class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  style="padding:20px; " action="{{url('employee')}}" method="POST">
              @csrf
                <div   style="margin-left:50px; margin-right:50px;" class="card-body">


              


                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" >
                 



                  
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="email"  value="{{old('email')}}" name="email">
                  

              
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" id="password"  value="{{old('password')}}" name="password" >
             

                 
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="text" class="form-control" id="conpass"  value="{{old('conpass')}}" name="conpass" >
                   <br>
                    <button style="background-color:blue; color:white; width:20%; margin:0;"href="employee.show" type="submit" class="btn btn-primary">Submit</button>







</div>
    <!-- /.content -->
@endsection