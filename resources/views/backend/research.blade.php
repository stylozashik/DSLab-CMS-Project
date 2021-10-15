@extends('backend.lib.layout')

@section('main_content')
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Research Topics</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          
                                          <th class="text-warning">Title</th>
                                          <th class="text-warning">Image</th>
                                          <th class="text-warning">Short Description</th>
                                          <th class="text-warning">link</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($topics as $t)
                                      <tr>
                                            
                                            
                                            <td>{{$t->title}}</td>
                                            <td><img src="{{asset("storage/$t->image")}}" alt="" style="height:80px; width:80px"/></td>
                                            <td class="center">{{$t->short_description}}</td>
                                            <td class="center">{{$t->link}}</td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/research-topic/{{ $t->id }}">
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