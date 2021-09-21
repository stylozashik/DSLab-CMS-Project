@extends('backend.lib.layout')

@section('heading')
    Add/Change About Two Image
@endsection

@section('main_content')
@if ($b_image != null)
  <img src="{{ asset("storage/$b_image->home_about_two_image") }}" alt="Image" /> 
    <p>
      <a class="btn btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Change Image
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <form role="form" action="{{ url('dashboard/about/two/image/store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
          <div class="form-group">
              <label for="brandLogo">Change About One Image</label>
              <input type="file" class="form-control-file" name="home_about_two_image">
          </div>
            
          </div>
          <!-- /.card-body -->
        
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
@else
<form role="form" action="{{ url('dashboard/about/two/image/store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
  <div class="form-group">
      <label for="home_about_two_image">Upload About Two Image</label>
      <input type="file" class="form-control-file" name="home_about_two_image">
  </div>
    
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
@endif

@endsection