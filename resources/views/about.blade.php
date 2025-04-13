@extends('layouts.app')

@section('title', 'About - Sala113')

@section('content')
    <div class="container my-5 d-flex align-items-center min-vh-100">
        <div class="row align-items-center w-100">
            <div class="col-md-6">
                <p>
                    {!! __('about113') !!}
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/about.jpg') }}" alt="Sala113" class="img-fluid rounded">
            </div>
        </div>
    </div>
@endsection
