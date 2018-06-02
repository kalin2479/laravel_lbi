@extends('admin.layout')
@section('header')
  <h1>
    Posts
    <small>Crear publicacion</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
    <li class="active">Create</li>
  </ol>
@stop
@section('content')
  <div class="row">
    <form>
      <div class="col-md-8">
        <div class="box box-primary">
          <div class="box-body">
            <div class="form-group">
              <label>Titulo de la publicacion</label>
              <input type="text" name="title" class="form-control" placeholder="Ingresa aqui el titulo" >
            </div>
            <div class="form-group">
              <label>Contenido publicacion</label>
              <textarea rows="10" name="body" class="form-control" placeholder="Ingresa un contenido de la publicacion"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-body">
            <div class="form-group">
              <label>Categorias</label>
              <select class="form-control">
                <option value="">Selecciona una categoria</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            <!-- Date -->
            <div class="form-group">
              <label>Fecha de publicacion:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input name="published_at" type="text" class="form-control pull-right" id="datepicker">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label>Extracto publicacion</label>
              <textarea name="excerpt" class="form-control" placeholder="Ingresa un extracto de la publicacion"></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Guardar Publicacion</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@stop
<!-- Para poder utilizar utilizamos al metodo push con el nombre que le hemos puesto a nuestro stack -->

@push('styles')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/adminlte/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
@endpush

@push('scripts')
  <!-- bootstrap datepicker -->
  <script src="/adminlte/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
  <script type="text/javascript">
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    CKEDITOR.replace('editor');
  </script>
@endpush
