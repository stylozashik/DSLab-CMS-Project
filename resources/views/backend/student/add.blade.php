@extends('backend.lib.layout')

@section('heading')
    Add Teacher's Info
@endsection

@section('main_content')
<form role="form" action="{{ url('/dashboard/student/add/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" class="form-control" name="Name" placeholder="Karim Ahmed">
      </div>

      <div class="form-group">
        <label for="Facebook">Facebook</label>
        <input type="text" class="form-control" name="Facebook" placeholder="https://www.facebook.com/ashikur.rahaman99/">
      </div>

      <div class="form-group">
        <label for="Twitter">Twitter</label>
        <input type="text" class="form-control" name="Twitter" placeholder="https://twitter.com/ashikur_swe">
      </div>
      <div class="form-group">
        <label for="Linkedin">Linkedin</label>
        <input type="text" class="form-control" name="Linkedin" placeholder="https://www.linkedin.com/in/ashikur-rahaman-bd/">
      </div>

      <div class="form-group">
          <label for="Image">Upload Image</label>
          <input type="file" class="form-control-file" name="Image">
      </div>

      
    </div>


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection