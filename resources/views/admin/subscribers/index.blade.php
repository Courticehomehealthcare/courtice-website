@extends('adminlte::page')

@section('title', 'Subscribers')

@section('content_header')
<h1>Subscribers</h1>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Subscriber List</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#sendEmailModal">
                <i class="fas fa-envelope"></i> Send Email to Selected
            </button>
            <form action="{{ route('admin.subscribers.clearAll') }}" method="POST" style="display:inline;"
                onsubmit="return confirm('Are you sure you want to clear all subscribers?')">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i> Clear All
                </button>
            </form>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 40px">
                        <input type="checkbox" id="selectAll">
                    </th>
                    <th>Email</th>
                    <th>Subscribed At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($subscribers as $subscriber)
                    <tr>
                        <td>
                            <input type="checkbox" class="subscriber-checkbox" value="{{ $subscriber->email }}">
                        </td>
                        <td>{{ $subscriber->email }}</td>
                        <td>{{ $subscriber->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No subscribers found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-labelledby="sendEmailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sendEmailModalLabel">Send Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="sendEmailForm">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" required
                            placeholder="Enter subject...">
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea name="content" id="content" rows="5" class="form-control" required
                            placeholder="Enter message..."></textarea>
                    </div>
                    <div id="selectedCount" class="text-muted mb-2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="sendBtn">
                        <span id="sendBtnText">Send Email</span>
                        <i class="fa fa-spinner fa-spin d-none" id="sendLoader"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function () {
        // Select All functionality
        $('#selectAll').on('click', function () {
            $('.subscriber-checkbox').prop('checked', this.checked);
        });

        // Update modal with selected count or alert if none selected
        $('#sendEmailModal').on('show.bs.modal', function (e) {
            var selectedEmails = [];
            $('.subscriber-checkbox:checked').each(function () {
                selectedEmails.push($(this).val());
            });

            if (selectedEmails.length === 0) {
                alert('Please select at least one subscriber.');
                e.preventDefault();
                return false;
            }

            $('#selectedCount').text(selectedEmails.length + ' subscriber(s) selected.');
        });

        // Handle Send Email Form Submission
        $('#sendEmailForm').on('submit', function (e) {
            e.preventDefault();

            var selectedEmails = [];
            $('.subscriber-checkbox:checked').each(function () {
                selectedEmails.push($(this).val());
            });

            var $btn = $('#sendBtn');
            var $btnText = $('#sendBtnText');
            var $loader = $('#sendLoader');

            // Loading state
            $btn.prop('disabled', true);
            $btnText.text('Sending...');
            $loader.removeClass('d-none');

            $.ajax({
                url: "{{ route('admin.subscribers.send') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    subject: $('#subject').val(),
                    content: $('#content').val(),
                    emails: selectedEmails
                },
                success: function (response) {
                    alert(response.message);
                    $('#sendEmailModal').modal('hide');
                    $('#sendEmailForm')[0].reset();
                    $('.subscriber-checkbox').prop('checked', false);
                    $('#selectAll').prop('checked', false);
                },
                error: function (xhr) {
                    var errorMsg = 'Something went wrong. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMsg = xhr.responseJSON.message;
                    }
                    alert(errorMsg);
                },
                complete: function () {
                    // Revert state
                    $btn.prop('disabled', false);
                    $btnText.text('Send Email');
                    $loader.addClass('d-none');
                }
            });
        });
    });
</script>
@stop