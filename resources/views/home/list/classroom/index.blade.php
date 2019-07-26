@extends('home.layouts.master')

@section('content')

<h1 class="title">
    Classrooms
</h1>

<div class="level is-mobile">
    <div class="level-left">
        <div class="level-item">
            <a class="button is-success is-rounded" href="/admin/classrooms/create">
                <span>
                    <i class="fas fa-plus"></i> Add Classroom
                </span>
            </a>
        </div>
    </div>

    <div class="level-right">
        <div class="level-item">
            <div class="field has-addons">
                <div class="control">
                    <input class="input" type="text" placeholder="Find a repository">
                </div>
                <div class="control">
                    <a class="button is-info">
                        Search
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="columns is-multiline is-mobile">
    <div class="column">
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

    </div>
</div>
@endsection
