@extends('admin.layouts.master')

@section('section')
<div id="content">
  <div class="container">
    
    <div class="card mb-3">
      <div class="card-header">
        Courses
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <td>No.</td>
                <td>Course</td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@section('addon-style')
  <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endsection

@section('addon-script')
  <script src="{{ asset('js/table.js') }}"></script>
@endsection