@extends('layouts.app')
<head>
<!-- javascript for google map -->
        {!! $map['js'] !!}
</head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    This is the Dashboard
                </div>
            </div>
		    </div>  
        </div>
        <!-- display the google map -->
        {!! $map['html'] !!}
    </div>
</div>
@endsection
