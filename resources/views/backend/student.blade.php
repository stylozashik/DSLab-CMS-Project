@extends('backend.lib.layout')

@section('main_content')
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Students</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          
                                          <th class="text-warning">Image</th>
                                          <th class="text-warning">Name</th>
                                          <th class="text-warning">Facebook</th>
                                          <th class="text-warning">Twitter</th>
                                          <th class="text-warning">Linkedin</th>
                                          <th class="text-warning">Erase</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($students as $s)
                                      <tr>
                                            
                                            <td><img src="{{asset("storage/$s->Image")}}" alt="" style="height:80px; width:80px"/></td>
                                            <td>{{$s->Name}}</td>
                                            <td class="center">{{$s->Facebook}}</td>
                                            <td class="center">{{$s->Twitter}}</td>
                                            <td class="center">{{$s->Linkedin}}</td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/student/{{ $s->id }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button type="Delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                      @endforeach


                                  </tbody>
                              </table>
                            </div>
                        </div><!--/span-->

                    </div><!--/row-->
        </div>
@endsection