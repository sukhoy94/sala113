@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo i menu -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="navbar-brand me-3" href="{{ route('visuals') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Sala113" height="40">
            </a>
            <!-- Menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('visuals') }}">Visuals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="othersDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="othersDropdown">
                            <li><a class="dropdown-item" href="{{ route('equipment') }}">Sprzęt</a></li>
                            <li><a class="dropdown-item" href="{{ route('pricing') }}">Cennik</a></li>
                            <li><a class="dropdown-item" href="{{ route('rules') }}">Regulamin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Ikona Instagrama (po środku) -->
        <div class="text-center d-none d-lg-block">
            <a href="https://www.instagram.com/sala113_lublin/" target="_blank" class="nav-link text-dark">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
        </div>

        <!-- Przełącznik języków (po prawej) -->
        <div class="d-flex">
            <ul class="navbar-nav">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a rel="alternate" hreflang="{{ $localeCode }}"
                           class="nav-link"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
