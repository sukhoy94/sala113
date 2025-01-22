@extends('layouts.app')

@section('title', 'Sala 113 - Lublin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo1.jpg') }}" alt="Photo 1" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo2.jpg') }}" alt="Photo 2" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo3.jpg') }}" alt="Photo 3" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo4.jpg') }}" alt="Photo 4" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo5.jpg') }}" alt="Photo 5" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo6.jpg') }}" alt="Photo 6" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo7.jpg') }}" alt="Photo 7" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/photo8.jpg') }}" alt="Photo 8" class="img-fluid rounded">
            </div>
        </div>
    </div>
@endsection
