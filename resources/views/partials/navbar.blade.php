@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('visuals') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Sala113" height="40">
        </a>

        <!-- Toggle for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
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
            <!-- Language Selector -->
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
