<!-- resources/views/evetns/index.blade.php -->

@extends('layouts.master')

@section('content')

    <!-- TODO: List Events -->
    <h3>Here are your events:</h3>
    <pre>
    {{ $volunteerevents }}
    </pre>

@endsection
