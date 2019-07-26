@extends('layouts.master')

@section('page_name', 'Dashboard')

@section('body_id', 'page-top')

@section('styles')
  <link rel="stylesheet" href="{{ asset('assets/home/home.css ') }}">
@endsection

@section('app')
<!-- Navbar -->
@include('home.partials.navbar')
<!-- Navbar End -->

<!-- Container -->
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <!-- Sidebar -->
            @include('home.partials.sidebar')
            <!-- Sidebar End -->
        </div>
        <div class="column is-9">
            @include('home.partials.breadcrumb')
            @yield('content')
        </div>
    </div>
</div>
<!-- Container End -->
@endsection