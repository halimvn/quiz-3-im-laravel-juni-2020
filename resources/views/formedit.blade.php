@extends('layouts.master')
@section('content')



  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

  <!-- Content Wrapper. Contains page content -->
          <form role="form" action="/artikel/{{$data->id}}" method="POST">
    @csrf
    @method("PUT")
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Judul</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->judul}}" name="judul" placeholder="Judul">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Isi</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="isi" value="{{$data->isi}}" placeholder="Isi">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Slug</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="slug" value="{{$data->slug}}" placeholder="Isi">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tag (Pisahkan dengan , )</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->tag}}" name="tag" placeholder="Tag">
      </div>
      
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div></div></div></section>
@endsection
  <!-- /.content-wrapper -->
  