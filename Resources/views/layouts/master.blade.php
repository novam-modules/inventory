@extends('layouts.admin')
@section('head')
    <title>Inventory {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
{{-- <link rel="stylesheet" href="{{ mix('css/inventory.css') }}"> --}}
@endsection
@section('layout')
<div id="inventory" class="inventory">
    @yield('content')
</div>
@endsection
@section('scripts')
{{-- <script src="{{ mix('js/inventory.js') }}"></script> --}}
@endsection
