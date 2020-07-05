@extends('layouts.master')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Id</th>
           
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            
            
          </tr>
        </thead>
       
        <tbody>
            @foreach ($artikel as $item =>$data)
            <tr>
                
                <th>{{$data->id}}</th>
                <th>{{$data->judul}}</th>
                <th>{{$data->isi}}</th>
                <th>{{$data->slug}}</th>
                <?php
                  $links = array();
                  $parts = explode(',', $data->tag);
                  foreach ($parts as $tags)
                  {
                   $links[] = "<a href='#' class='btn btn-primary'>".$tags." </a>";
                  }
                  $tagged =  implode(" ", $links);
                  
                ?>
                <th><?php echo $tagged; ?></th>
                
                
           
              </tr>
            @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection


