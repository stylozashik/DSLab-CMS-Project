@extends('backend.lib.layout')

@section('heading')
    Add Second About Info
@endsection

@section('main_content')
<form role="form" action="{{ url('/dashboard/about/two/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="home_about_two_title">Title</label>
        <input type="text" class="form-control" name="home_about_two_title" placeholder="We Analyze & Visualize The Real Life Data For Incrasing The Companies Business">
      </div>
      <div class="form-group">
      <label for="home_about_two_description">Write description here..</label>
        <textarea class="textarea" name="home_about_two_description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection