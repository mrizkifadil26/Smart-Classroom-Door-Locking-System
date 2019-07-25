@extends('layouts.master')

@section('page_name', 'Dashboard')

@section('body_id', 'page-top')

@section('app')
  
@endsection

@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  @yield('addon-style')
@endsection

@section('scripts')
  <script src="{{ asset('js/dashboard.js') }}"></script>
  @yield('addon-script')
@endsection