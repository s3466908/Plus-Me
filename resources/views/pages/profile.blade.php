
@extends('layouts.app')

@section('content')
    <h1> Profile Page </h1>

<!-- show profile info -->
<div>
    Name: {{ $user -> first_name }} {{ $user -> last_name }}
    
    DOB: {{ $user -> date_of_birth }}
    Contact Number: {{ $user -> contact_number }}
    Email: {{ $user -> email }} 

    <!-- maybe add profile picture -->
</div>
@endsection