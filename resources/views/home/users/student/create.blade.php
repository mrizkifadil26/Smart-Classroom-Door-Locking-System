@extends('home.layouts.master')

@section('content')
<div class="container">
    <h1 class="title">
        Add Student
    </h1>
    
    <div class="columns">
        <div class="column is-8">
            <form action="">
                <div class="field">
                    <label class="label">
                        Name
                    </label>
                    <div class="control">
                        <input type="text" class="input" placeholder="e.g. BR-1.3">
                    </div>
                </div>
                <div class="field is-grouped">
                    <p class="control">
                        <a class="button is-primary">
                            Create
                        </a>
                    </p>
                    <p class="control">
                        <a class="button is-light">
                            Cancel
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
