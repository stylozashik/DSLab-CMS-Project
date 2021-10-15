@extends('backend.lib.layout')

@section('heading')
    Add Research Topic
@endsection

@section('main_content')
<form role="form" action="{{ url('/dashboard/research-topic/add/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="A Data Driven Approach To Forecasting Bangladesh Next Generation Economy">
      </div>
      <div class="form-group">
      <label for="short_description">Write a short description here..</label>
      <input type="text" class="form-control" name="short_description" placeholder="Write some short description here...">
      </div>
      <div class="form-group">
        <label for="link">Provide publication link</label>
        <input type="text" class="form-control" name="link" placeholder="https://www.sciencedirect.com/science/article/pii/S2405852116300957">
      </div>
      <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control-file" name="image">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection