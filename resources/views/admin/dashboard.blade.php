@extends('admin.layout')

@section('content')
  <h1>Dashboard</h1>
  <p>Usuario auntentificado: {{ auth()->user()->name }}</p>
@stop
