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
              <label>Extracto publicacion</label>
              <textarea name="excerpt" class="form-control" placeholder="Ingresa un extracto de la publicacion"></textarea>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@stop
