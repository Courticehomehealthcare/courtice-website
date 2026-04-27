@extends('adminlte::page')

@section('title', 'FAQs')

@section('content_header')
    <h1>FAQ List</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.faqs.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Add FAQ
</a>

<div class="card">
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
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
                            <a href="{{ route('admin.faqs.edit', $faq) }}"
                               class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('admin.faqs.destroy', $faq) }}"
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

    </div>
</div>

@stop
