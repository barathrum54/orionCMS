@extends('layouts.app')

@section('content')
    <br><br><br>
    <div class="container py-5 my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <h2>Satın almakta olduğunuz hizmetler için</h2>
                <br>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                {!! $res !!}
            </div>
        </div>
    </div>
@endsection
