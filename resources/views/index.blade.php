@extends('layouts.master')

@section('page_name', 'Home')

@section('app')

    <h1>Absensi</h1>

    <table>
        <thead>
            <td>No.</td>
            <td>UID</td>
            <td>Nama</td>
            <td>Tanggal Masuk</td>
            <td>Jam Masuk</td>
        </thead>

        @foreach($users as $key => $data)
        <tr>
            <td>1</td>
            <td>{{-- $data->uid --}}</td>
            <td>{{-- $data->name --}}</td>
            <td>{{-- $data->date_in --}}</td>
            <td>{{-- $data->time_in --}}</td>
        </tr>
        @endforeach
    </table>

@endsection