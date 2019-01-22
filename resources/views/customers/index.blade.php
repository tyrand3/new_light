<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

@extends('adminlte::page')




@section('title', 'NewLight - Customers')

@section('content_header')
    <h1>Customer Table</h1>
@stop

@section('content')
<div class="row-6">
<div class="box box-primary">
    <div class="box-header with-border">


<div class="card-body table-responsive p-0" >

<table class="table table-hover" id="table-customer">

    <thead>
        <tr>
            
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Tier</th>
            
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</div>
</div>
</div>

@stop

<script type="text/javascript">
    $(function() {
        var oTable = $('#table-customer').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("data-customer") }}'
            },
            columns: [
            
            {data: 'name', name: 'name'},
            {data: 'address', name: 'address'},
            {data: 'phone', name: 'phone'},
            {data: 'Tier', name: 'Tier'},
            
   
        ],
        });
    });

</script>
