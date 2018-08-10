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
            #frame {
	            padding-left:20%;
	            padding-Right:20%;
            }

            #googleMap {
	            width:100%;
	            height:400px;
            }
        </style>
    </head>
    <body>
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
