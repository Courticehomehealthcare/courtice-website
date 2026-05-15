@extends('adminlte::page')

@section('title', 'Site Settings')

@section('content_header')
<h1>Site Settings</h1>
@stop

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header">
        <h3 class="card-title">General Configuration</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th width="150px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($content as $item)
                    <tr>
                        <td>
                            @if($item->logoimage)
                                <img src="{{ asset($item->logoimage) }}" width="100" class="img-thumbnail" alt="Logo">
                            @else
                                <span class="badge badge-secondary">No Logo</span>
                            @endif
                        </td>
                        <td>{{ $item->companyname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>
                            
                        </td>
                    </tr>
                @endforeach
                @if($content->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center">No settings found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $content->links('pagination::bootstrap-4') }}
        </div>

        

    </div>
</div>

@stop