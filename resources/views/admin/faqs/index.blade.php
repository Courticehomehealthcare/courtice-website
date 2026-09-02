@extends('adminlte::page')

@section('title', 'FAQs')

@section('content_header')
    <h1>FAQ List</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif



<div class="card shadow-sm border-0 table-wrapper">
    <div class="card-header bg-white d-flex justify-content-between align-items-center" style="padding: 1rem 1.25rem;">
        <h3 class="card-title m-0" style="font-size: 1.1rem; font-weight: 500; color: #111827;">FAQ List</h3>
        <div class="d-flex align-items-center">
            <div class="input-group input-group-sm mr-3" style="width: 250px;">
                <input type="text" name="table_search" class="form-control" placeholder="Search..." style="border-radius: 4px 0 0 4px; border-color: #e2e8f0; height: 34px;">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default" style="border-color: #e2e8f0; background: #ffffff; color: #6b7280; height: 34px; border-radius: 0 4px 4px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{ route('care.faqs.create') }}" class="btn btn-primary" style="height: 34px; display: flex; align-items: center; border-radius: 4px; font-weight: 500; background-color: #007bff; border-color: #007bff;">
                <i class="fas fa-plus mr-1" style="font-size: 0.8rem;"></i> Add FAQ
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-hover table-hover">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Question</th>
                    <th>Page</th>
                    <th>Answer</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>
                            @php
                                $pages = is_array($faq->page) ? $faq->page : [$faq->page];
                            @endphp
                            @foreach($pages as $p)
                                @if($p)
                                    <span class="badge badge-{{ $p == 'services' ? 'info' : 'primary' }}">
                                        {{ ucfirst($p) }}
                                    </span>
                                @endif
                            @endforeach
                        </td>
                        <td>{!! Str::limit($faq->answer, 80) !!}</td>

                        <td>
                            <a href="{{ route('care.faqs.edit', $faq) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('care.faqs.destroy', $faq) }}"
                                  method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this FAQ?')"
                                        class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-4">
            {{ $faqs->links('pagination::bootstrap-4') }}
        </div>

        


    </div>
</div>

@stop
