@extends('backend.lib.layout')

@section('heading')
    Add Banner Info
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/banner/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="home_banner_content_title_up">Title Up</label>
        <input type="text" class="form-control" name="home_banner_content_title_up" placeholder="Upgrade">
      </div>

      <div class="form-group">
        <label for="home_banner_content_title_middle">Title Middle</label>
        <input type="text" class="form-control" name="home_banner_content_title_middle" placeholder="Your Businesses With">
      </div>
      <div class="form-group">
        <label for="home_banner_content_title_down">Title Down</label>
        <input type="text" class="form-control" name="home_banner_content_title_down" placeholder="Data Scientific Solution">
      </div>
      <div class="form-group">
      <label for="home_banner_content_subtitle">Write subtitle here..</label>
        <textarea class="textarea" name="home_banner_content_subtitle" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 20px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection