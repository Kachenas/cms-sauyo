@extends('layouts.default')

@section('content')
    <div id="complaintForm">
    @include('complaints.complainantForm')
    </div>
    <div id="reportSummary">
    @include('reports.reportsSummary') 
    </div>
    <div id="registrationForm">
    @include('registration.brgy-registration') 
    </div>
@endsection
