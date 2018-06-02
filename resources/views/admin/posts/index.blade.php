@extends('admin.layout')
@section('header')
  <h1>
    Posts
    <small>Listado</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Posts</li>
  </ol>
@stop
@section('content')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Listado de publicaciones</h3>
    </div>
    <div class="box-body">
    <table id="posts-table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>titulo</th>
          <th>Extracto</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->excerpt }}</td>
            <td>
              <a href="#" class="btn btn-xs btn-info">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="#" class="btn btn-xs btn-danger">
                <i class="fa fa-times"></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
@stop

@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
  <!-- DataTables -->
  <script src="/adminlte/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#posts-table').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endpush
