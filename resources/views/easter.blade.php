@extends('layouts.app')

@section('title', 'Sala 113 - ' . __('easter_title'))

@section('content')
    <div class="container my-5">
        <!-- Sekcja z tekstem wprowadzającym -->
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-12">
                <h2 class="mb-4">{{ __('easter_title') }}</h2>
                <p class="lead">
                    {{ __('easter_intro') }}
                </p>
                <p>
                    {!! __('easter_offer') !!}
                </p>
            </div>
        </div>

        <!-- Galeria zdjęć w układzie 2 kolumnowym -->
        <div class="row gx-4">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/1.jpg') }}" alt="Easter 1" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/2.jpg') }}" alt="Easter 2" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/3.jpg') }}" alt="Easter 3" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/4.jpg') }}" alt="Easter 4" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/5.jpg') }}" alt="Easter 5" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/6.jpg') }}" alt="Easter 6" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/7.jpg') }}" alt="Easter 7" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/8.jpg') }}" alt="Easter 8" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/9.jpg') }}" alt="Easter 9" class="img-fluid rounded">
            </div>

            <div class="col-md-6 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/10.jpg') }}" alt="Easter 10" class="img-fluid rounded">
            </div>

            <div class="col-12 mb-4" data-aos="fade-up">
                <img src="{{ asset('images/easter/11.jpg') }}" alt="Easter 11" class="img-fluid rounded">
            </div>
        </div>
    </div>
@endsection
