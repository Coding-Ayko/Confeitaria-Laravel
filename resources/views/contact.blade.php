@extends('layouts.main')

@section('title', 'contact')

@push('styles')
    {{-- CSS do Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    {{-- Seu CSS --}}
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@push('scripts')
    {{-- JS do Leaflet --}}
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    {{-- Seu JS --}}
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush

@section('content')
    <h1>Contatos: <p>16 99999-9999 | 3999-9999</p>
    </h1>
    <h1>Local:</h1>
    <br>
    <div id="map"></div>
@endsection
