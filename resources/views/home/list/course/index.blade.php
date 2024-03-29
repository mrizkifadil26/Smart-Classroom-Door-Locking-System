@extends('home.layouts.master')

@section('content')

<h1 class="title">
    Courses
</h1>

<div>
    <a class="button is-success is-rounded" href="/admin/courses/create">
        <span>
            <i class="fas fa-plus"></i> Add Course
        </span>
    </a>
</div>

<br>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Course</th>
            <th colspan="2" class="has-text-centered">Options</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Matematika Teknik 1</td>
            <td>
                <a class="button is-info" href="/admin/courses/edit">
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