@extends('backend.lib.layout')

@section('main_content')
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Teachers</h2>
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
                                          <th class="text-warning">Designation</th>
                                          <th class="text-warning">Facebook</th>
                                          <th class="text-warning">Twitter</th>
                                          <th class="text-warning">Linkedin</th>
                                          <th class="text-warning">Erase</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($teachers as $t)
                                      <tr>
                                            
                                            <td><img src="{{asset("storage/$t->Image")}}" alt="" style="height:80px; width:80px"/></td>
                                            <td>{{$t->Name}}</td>
                                            <td class="center">{{$t->Designation}}</td>
                                            <td class="center">{{$t->Facebook}}</td>
                                            <td class="center">{{$t->Twitter}}</td>
                                            <td class="center">{{$t->Linkedin}}</td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/team/{{ $t->id }}">
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