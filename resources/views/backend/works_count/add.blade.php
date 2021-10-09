@extends('backend.lib.layout')

@section('heading')
    Add Works Info
@endsection

@section('main_content')
<form role="form" action="{{ url('/dashboard/works/add/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="collaboration">Collaboration</label>
        <input type="text" class="form-control" name="collaboration" placeholder="200">
      </div>

      <div class="form-group">
        <label for="team">Team</label>
        <input type="text" class="form-control" name="team" placeholder="18">
      </div>

      <div class="form-group">
        <label for="publication">Publication</label>
        <input type="text" class="form-control" name="publication" placeholder="15">
      </div>
      <div class="form-group">
        <label for="awards">Awards</label>
        <input type="text" class="form-control" name="awards" placeholder="24">
      </div>

    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection