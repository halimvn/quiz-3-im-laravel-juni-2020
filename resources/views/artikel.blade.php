@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>No</th>
            <th>Id</th>
            <th>Judul</th>
            
            <th>Action</th>
          </tr>
        </thead>
       
        <tbody>
            @foreach ($artikel as $item =>$data)
            <tr>
                <th>{{$item + 1}}</th>
                <th>{{$data->id}}</th>
                <th>{{$data->judul}}</th>
                
            <th><a href="/artikel/{{$data->id}}" class="btn btn-primary">Lihat Detail</a>
            <a href="/artikel/{{$data->id}}/edit" class="btn btn-success">Edit</a>
            <form style="display: inline;" action="/artikel/{{$data->id}}/" method="POST">
              @csrf
              @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button></td>
            </th>
              </tr>
            @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush