@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About Plus Me</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4"><img src="./images/car.svg" class="img" alt="Car Share" width="80%" ></div>
                        <div class="col-sm-4"><img src="./images/platform-independent.svg" class="img" alt="Platform-independent" width="80%" ></div>
                        <div class="col-sm-4"><img src="./images/paypal.svg" class="img" alt="Paypal" width="60%" ></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.footer');
</div>
@endsection
