@extends('home.layouts.master')

@section('content')
<section class="hero is-info welcome is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Hello, Admin.
            </h1>
            <h2 class="subtitle">
                I hope you are having a great day!
            </h2>
        </div>
    </div>
</section>

<section class="info-tiles">
    <div class="box">
        <nav class="level is-mobile">
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Students</p>
                    <p class="title">100</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Lecturers</p>
                    <p class="title">20</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Courses</p>
                    <p class="title">50</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <p class="heading">Classroom</p>
                    <p class="title">10</p>
                </div>
            </div>
        </nav>
    </div>
</section>
@endsection
