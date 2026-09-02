@extends('adminlte::page')

@section('title', 'Edit Service')

@section('content_header')
    <h1>Edit Service</h1>
@stop

@section('content')
<form action="{{ route('care.services.update', $service) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.services.form')
</form>
@stop

@section('js')
@include('admin.services.scripts')
@stop
