@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ __('privacy.title') }}</h1>

                <p><strong>{{ __('privacy.last_updated') }}: 18.05.2025</strong></p>

                <h3>{{ __('privacy.introduction_title') }}</h3>
                <p>{{ __('privacy.introduction_text') }}</p>

                <h3>{{ __('privacy.data_collection_title') }}</h3>
                <p>{{ __('privacy.data_collection_text') }}</p>
                <ul>
                    <li>{{ __('privacy.no_forms') }}</li>
                    <li>{{ __('privacy.no_login') }}</li>
                    <li>{{ __('privacy.no_analytics') }}</li>
                    <li>{{ __('privacy.no_cookies') }}</li>
                    <li>{{ __('privacy.no_tracking') }}</li>
                </ul>

                <h3>{{ __('privacy.future_changes_title') }}</h3>
                <p>{{ __('privacy.future_changes_text') }}</p>
            </div>
        </div>
    </div>
@endsection
