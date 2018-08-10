<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {!! $map['js']!!}

        <!-- Styles -->
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #fff;
                font-family: "Lucida Grande", "Helvetica Neue", Roboto, "Droid Sans", Prelude, Helvetica, Arial, sans-serif;
                font-size: 100%;
                color: #334;
	            text-align:center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 72px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top: 30px;
            #frame {
	            padding-left:20%;
	            padding-Right:20%;
            }

            #googleMap {
	            width:100%;
	            height:400px;
            }

            .button {
                background-color: #ddd;
                border: none;
                color: black;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 16px;
                font-family: Century Gothic;
            }



        </style>
    </head>
    <body>
        <div class="flex-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register!!</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Plus Me
                </div>

                <div class="form-group row">
                    <div class="col-sm-9">
                        <div class="pickup-location-same">
                            <label>Pickup Location</label>
                            <input type="hidden" value="" />
                            <input class="form-control ondemand-typeahead" type="text" placeholder="Search by suburb, postcode, city, region..." data-provide="typeahead" autocomplete="on" value="" name="location" style="padding: 10px; margin: 10px; width: 500px;" />
                            <button type="button" class="button" >Locate me</button>
                        </div>
                    </div>
                <br>
                    <div class="col-sm-4">
                        <div class="pickup-date-same">
                            <label>Pickup Date</label>
                            <input type="hidden" value="" />
                            <input class="form-control ondemand-typeahead" type="date"  data-provide="typeahead" autocomplete="on" value="" name="pickupdate" style="padding: 10px; margin: 10px; width: 300px;" />

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="return-date-same">
                            <label>Return Date</label>
                            <input type="hidden" value="" />
                            <input class="form-control ondemand-typeahead" type="date" data-provide="typeahead" autocomplete="on" value="" name="returndate" style="padding: 10px; margin: 10px; width: 300px;" />
                        </div>
                    </div>
                    <br>
                    <button type="button" class="button" >Search</button>
                </div>
                <br />
                <div>
                    <img src="./images/mapwillbereplaced.PNG" class="img-Map" alt="Google Maps" width="80%" >
                </div>

                <div>

                </div>

                @include('layouts.partials.footer')
            </div>
    <h2>Welcome To!</h2>
        <h1>Plus Me Car Sharing </h1>
		<p>Google Maps API</p>
        <div id="frame">
		<div id="googleMap" >
        {!! $map['html']!!}
        </div>
		</div>
        
    </body>
</html>
