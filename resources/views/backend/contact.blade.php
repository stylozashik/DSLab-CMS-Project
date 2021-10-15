@extends('backend.lib.layout')

@section('main_content')
    	<!-- start: Content -->
			<div id="content" class="span10">


                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="fas fa-barcode"></i><span class="break"></span>All Messages</h2>
                                <div class="box-icon">

                                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>

                                </div>
                            </div>
                            <div class="box-content">
                                <table class="table table-hover table-bordered bootstrap-datatable datatable">
                                  <thead>
                                      <tr>
                                          <th class="text-warning">Name</th>
                                          <th class="text-warning">Email</th>
                                          <th class="text-warning">Subject</th>
                                          <th class="text-warning">Phone</th>
                                          <th class="text-warning">Message</th>
                                          <th class="text-warning">Erase</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($contacts as $c)
                                      <tr>
                                            <td>{{$c->Name}}</td>
                                            <td class="center">{{$c->Email}}</td>
                                            <td class="center">{{$c->Subject}}</td>
                                            <td class="center">{{$c->Phone}}</td>
                                            <td class="center">{{$c->Message}}</td>
                                            <td class="center">
                                                 <form method="POST" action="/dashboard/messages/{{ $c->id }}">
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