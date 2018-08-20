@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row">
            <div class="pickup-location-same">
                <label>Pickup Location</label>
                <input class="form-control ondemand-typeahead" type="text" placeholder="Search by suburb, postcode, city, region..." data-provide="typeahead" autocomplete="on" value="" name="location" style="padding: 10px; margin: 10px; width: 300px;" />
            </div>
            <div class="pickup-date-same">
                <label>Pickup Date</label>
                <input type="hidden" value="" />
                <input class="form-control ondemand-typeahead" type="date"  data-provide="typeahead" autocomplete="on" value="" name="pickupdate" style="padding: 10px; margin: 10px; width: 200px;" />
            </div>
            <div class="return-date-same">
                <label>Return Date</label>
                <input type="hidden" value="" />
                <input class="form-control ondemand-typeahead" type="date" data-provide="typeahead" autocomplete="on" value="" name="returndate" style="padding: 10px; margin: 10px; width: 200px;" />
            </div>
            <a href="{{ route('booking') }}" class="btn btn-primary" style="height: 40px;">Edit</a>
    </div>
    <div class="card">
            <h5 class="card-header">car type</h5>
            <div class="card-body">
              <h5 class="card-title">$5 / hour</h5>
              <p class="card-text">akljsdkjkjnamn mksad asdk</p>
              <a href="{{ route('booking/step2') }}" class="btn btn-primary">Edit</a>
            </div>
          </div>
    <br />
    <a href="{{ route('booking') }}" style="color:cornflowerblue">Back to step 2 </a>
    <div class="progress" style="margin: 10px 0">
        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
            <span class="sr-only">50%</span>
        </div>
    </div>
    <br >

    {{-- <form method="POST" action="{{ route('booking/step4') }}">
            <div class="form-group row">

            </div>
    </form> --}}
    <!-- end form -->
        <a href="{{ route('booking/step4') }}" class="btn btn-primary">Checkout</a>

    @include('layouts.partials.footer');
</div>
@endsection
