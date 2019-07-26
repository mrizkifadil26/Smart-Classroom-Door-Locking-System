@extends('home.layouts.master')

@section('content')

<h1 class="title">
    Schedules
</h1>

<div>
    <a class="button is-success is-rounded" href="/admin/schedules/create">
        <span>
            <i class="fas fa-plus"></i> Add Schedule
        </span>
    </a>
</div>

<br>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Day</th>
            <th>Time Start</th>
            <th>Time End</th>
            <th>Course</th>
            <th>Lecturer</th>
            <th colspan="2" class="has-text-centered">Options</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Monday</td>
            <td>09:00</td>
            <td>12:00</td>
            <td>Matematika Teknik 1</td>
            <td>Ir. H. Aswata SE.,MM.,IPM.</td>
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