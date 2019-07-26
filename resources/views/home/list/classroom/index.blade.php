@extends('home.layouts.master')

@section('content')

<h1 class="title">
    Classrooms
</h1>

<div>
    <a class="button is-success is-rounded" href="/admin/classrooms/create">
        <span>
            <i class="fas fa-plus"></i> Add Classroom
        </span>
    </a>
</div>

<br>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Classroom</th>
            <th colspan="2" class="has-text-centered">Options</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>BR 1-3</td>
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