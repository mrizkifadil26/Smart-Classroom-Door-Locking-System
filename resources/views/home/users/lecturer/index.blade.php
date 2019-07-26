@extends('home.layouts.master')

@section('content')

<h1 class="title">
    Lecturers
</h1>

<div>
    <a class="button is-success is-rounded" href="/admin/lecturers/create">
        <span>
            <i class="fas fa-plus"></i> Add Lecturer
        </span>
    </a>
</div>

<br>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>NPM</th>
            <th>Name</th>
            <th>Courses</th>
            <th colspan="2" class="has-text-centered">Options</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>198403042009121010</td>
            <td>Anggoro Suryo Pramudyo, M.Kom.</td>
            <td>
                <a class="button is-warning" href="/admin/lecturers/courses">
                    <span>
                        <i class="fas fa-list"></i>
                        List
                    </span>
                </a>
            </td>
            <td>
                <a class="button is-info" href="/admin/classrooms/edit">
                    <span>
                        <i class="fas fa-pen"></i>
                        Edit
                    </span>
                </a>
            </td>
            <td>
                <a class="button is-danger" href="">
                <span>
                    <i class="fas fa-trash"></i>
                        Delete
                    </span>
                </a>
            </td>
        </tr>
    </tbody>
</table>
@endsection