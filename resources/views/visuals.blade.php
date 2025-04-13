@extends('layouts.app')

@section('title', 'Sala 113 - Lublin')

@section('content')
    <div class="container my-5">
        <div class="row gx-4">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo7.jpg') }}" alt="Photo 7" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo2.jpg') }}" alt="Photo 2" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo3.jpg') }}" alt="Photo 3" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo4.jpg') }}" alt="Photo 4" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo5.jpg') }}" alt="Photo 5" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo6.jpg') }}" alt="Photo 6" class="img-fluid rounded">
            </div>


            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo1.jpg') }}" alt="Photo 1" class="img-fluid rounded">
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/home/photo8.jpg') }}" alt="Photo 8" class="img-fluid rounded">
            </div>
        </div>
    </div>

@endsection
