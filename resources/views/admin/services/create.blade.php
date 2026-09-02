@extends('adminlte::page')

@section('title', 'Add Service')

@section('content_header')
    <h1>Add Service</h1>
@stop

@section('content')
<form action="{{ route('care.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.services.form')
</form>
@stop

@section('js')
@include('admin.services.scripts')
@stop
