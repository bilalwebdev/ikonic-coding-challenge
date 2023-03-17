@extends('layouts.app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/helper.js') }}?v={{ time() }}" defer></script>
    <script src="{{ asset('js/main.js') }}?v={{ time() }}" defer></script>

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        @endif
        <x-network_connections :users="$users" :sentreqs="$sentRequests" :receivereqs="$receivedRequests" :connections="$myConnections" />
    </div>
@endsection
