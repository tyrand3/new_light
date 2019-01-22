@extends('adminlte::page')

@section('pageTitle', 'Yabba dabba dope!')
@php

$title='';

if(isset($customer) && !empty($customer)){
$title="Edit Pengguna";
}
else{
  $customer=new \App\Customer;
  $title="Daftar Pengguna Baru";
}

@endphp


@section('content')
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$title}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="box box-primary">
            <div class="box-header with-border">
              <div class="card" >
              <form method="post" action="{{action('CustomerController@save')}}" enctype="multipart/form-data">
              {{ csrf_field() }}

                <div class="card-body">
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama calon pengguna" value={{$customer->name}}>
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea type="text" class="form-control" id="address" name="address"{{$customer->address}}></textarea>
                  </div>

                <div class="form-group">
                    <label >No. Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon Pengguna" value={{$customer->phone}} >
                  </div>


     
               
                  <div class="form-group">
                    <label>Berlangganan</label>
                    <select class="form-control form-control-lg" >
                      <option>3 Bulan</option>
                      <option>6 Bulan</option>
                      <option>12 Bulan</option>
                    
                    </select>
                  </div>    


                  <div class="form-group">
                    <label>Tier</label>
                    <select class="form-control" name="tier" id="tier">
                      <option>Basic</option>
                      <option>Reguler</option>
                      <option>Premium</option>
                    
                    </select>
                  </div>

                  

                 <!-- form checklist
                     <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"></label>
                  </div>
                
                </div> -->
               

                <!-- /.card-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

                </form>
                </div>
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection