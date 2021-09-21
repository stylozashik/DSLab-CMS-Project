@extends('backend.lib.layout')

@section('heading')
    Add About Info
@endsection

@section('main_content')
<form role="form" action="{{ url('/dashboard/about/two/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="home_about_two_title">Title</label>
        <input type="text" class="form-control" name="home_about_two_title" value="{{ $about_two->home_about_two_title}}">
      </div>
      <div class="form-group">
      <label for="home_about_one_description">Write description here..</label>
      <input type="text" class="form-control" name="home_about_two_description" value="{{ $about_two->home_about_two_description}}">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection