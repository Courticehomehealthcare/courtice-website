@extends('adminlte::page')

@section('title', 'Contact Messages')

@section('content_header')
<h1>Contact Messages</h1>
@stop

@section('content')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-header d-flex align-items-center">
        <button id="bulkDeleteBtn" class="btn btn-danger btn-sm" style="display:none;" onclick="bulkDelete()">
            <i class="fas fa-trash"></i> Delete Selected (<span id="selectedCount">0</span>)
        </button>
    </div>
    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="40px">
                        <input type="checkbox" id="selectAll">
                    </th>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th width="120px">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>
                            <input type="checkbox" class="row-checkbox" value="{{ $contact->contactid }}">
                        </td>
                        <td>{{ $contacts->firstItem() + $loop->index }}</td>

                        <td>{{ $contact->Firstname }}</td>
                        <td>{{ $contact->Lastname }}</td>
                        <td>{{ $contact->Phoneno }}</td>
                        <td>{{ $contact->Emailaddress }}</td>
                        <td>{{ $contact->Location }}</td>

                        <td>{{ Str::limit($contact->Message, 30) }}</td>

                        <td>
                            {{ $contact->Created_at?->format('d M Y') ?? 'N/A' }}
                        </td>


                        <td>
                            <a href="{{ route('admin.contacts.show', $contact->contactid) }}"
                                class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>

                            <form action="{{ route('admin.contacts.destroy', $contact->contactid) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Delete this message?')" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <div class="mt-3 d-flex justify-content-center">
            {{ $contacts->links() }}
        </div>

    </div>
</div>

@stop

@section('js')
<script>
    // Select All checkbox
    document.getElementById('selectAll').addEventListener('change', function () {
        var checkboxes = document.querySelectorAll('.row-checkbox');
        checkboxes.forEach(function (cb) { cb.checked = this.checked; }.bind(this));
        updateBulkBtn();
    });

    // Individual checkboxes
    document.addEventListener('change', function (e) {
        if (e.target.classList.contains('row-checkbox')) {
            updateBulkBtn();
            // Update selectAll state
            var all = document.querySelectorAll('.row-checkbox');
            var checked = document.querySelectorAll('.row-checkbox:checked');
            document.getElementById('selectAll').checked = (all.length === checked.length && all.length > 0);
        }
    });

    function updateBulkBtn() {
        var checked = document.querySelectorAll('.row-checkbox:checked');
        var btn = document.getElementById('bulkDeleteBtn');
        var count = document.getElementById('selectedCount');
        count.textContent = checked.length;
        btn.style.display = checked.length > 0 ? 'inline-block' : 'none';
    }

    function bulkDelete() {
        var checked = document.querySelectorAll('.row-checkbox:checked');
        if (checked.length === 0) return;

        if (!confirm('Are you sure you want to delete ' + checked.length + ' selected message(s)?')) return;

        var ids = Array.from(checked).map(function (cb) { return cb.value; });
        var btn = document.getElementById('bulkDeleteBtn');
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm mr-1" role="status"></span>Deleting...';

        fetch("{{ route('admin.contacts.bulk-destroy') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            body: JSON.stringify({ ids: ids })
        })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Error deleting contacts.');
                    btn.disabled = false;
                    btn.innerHTML = '<i class="fas fa-trash"></i> Delete Selected (<span id="selectedCount">' + ids.length + '</span>)';
                }
            })
            .catch(function () {
                alert('Something went wrong.');
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-trash"></i> Delete Selected (<span id="selectedCount">' + ids.length + '</span>)';
            });
    }
</script>
@stop