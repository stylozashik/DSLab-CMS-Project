@extends('backend.lib.layout')

@section('heading')
    Edit Banner Info
@endsection

@section('main_content')
<form role="form" action="{{ url('dashboard/banner/update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card-body">
      <div class="form-group">
        <label for="home_banner_content_title_up">Title Up</label>
        <input type="text" class="form-control" name="home_banner_content_title_up" placeholder="Upgrade" value="{{ $banner->home_banner_content_title_up }}">
      </div>

      <div class="form-group">
        <label for="home_banner_content_title_middle">Title Middle</label>
        <input type="text" class="form-control" name="home_banner_content_title_middle" placeholder="Your Businesses With" value="{{ $banner-> home_banner_content_title_middle}}">
      </div>
      <div class="form-group">
        <label for="home_banner_content_title_down">Title Down</label>
        <input type="text" class="form-control" name="home_banner_content_title_down" placeholder="Data Scientific Solution" value="{{ $banner-> home_banner_content_title_down}}">
      </div>
      <div class="form-group">
        <label for="home_banner_content_subtitle">Sub Title Here</label>
        <input type="text" class="form-control" name="home_banner_content_subtitle" placeholder="First time providing data service in Bangladesh, Powered By Data Science Lab of Daffodil International University, Dhaka, Bangladesh" value="{{ $banner-> home_banner_content_subtitle}}">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection