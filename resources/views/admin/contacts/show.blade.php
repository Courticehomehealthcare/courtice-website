@extends('adminlte::page')

@section('title', 'Contact Details')

@section('content_header')
    <h1>Contact Details</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <h3>{{ $contact->Firstname }} {{ $contact->Lastname }}</h3>

        <table class="table table-striped mt-3">
            <tr><th>First Name</th><td>{{ $contact->Firstname }}</td></tr>
            <tr><th>Last Name</th><td>{{ $contact->Lastname }}</td></tr>
            <tr><th>Phone</th><td>{{ $contact->Phoneno }}</td></tr>
            <tr><th>Email</th><td>{{ $contact->Emailaddress }}</td></tr>
            <tr><th>Location</th><td>{{ $contact->Location }}</td></tr>
            <tr><th>Qualification</th><td>{{ $contact->Qualification }}</td></tr>
            <!-- <tr><th>Visa Status</th><td>{{ $contact->visastatus }}</td></tr> -->
            <!-- <tr><th>Country</th><td>{{ $contact->country }}</td></tr> -->
            <!-- <tr><th>WhatsApp</th><td>{{ $contact->whatsapp }}</td></tr> -->

            <tr>
                <th>Message</th>
                <td>{{ $contact->Message }}</td>
            </tr>

            <tr>
                <th>Date</th>
                <td>{{ $contact->Created_at ? $contact->Created_at->format('d M Y h:i A') : 'N/A' }}</td>
            </tr>
        </table>

        <a href="{{ route('care.contacts.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>

    </div>
</div>

@stop
