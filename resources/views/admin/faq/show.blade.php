  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminbase')

  @section('title', 'Show Question :'.$data->question)

  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Show {{$data->title}}
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Examples</a></li>
              <li class="active">Blank page</li>
          </ol>
      </section>
      <!-- Main content -->
      <section class="content">

          <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-primary">
                      <div class="box-header">
                          <h3 class="box-title">Quick Example</h3>
                      </div><!-- /.box-header -->
                      <!-- form start -->
                      <table class="table table-stripped table-bordered">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Question</th>
                                  <th>Answer</th>
                                  <th>Status</th>

                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>{{$data->id}}</td>
                                  <td>{{$data->question}}</td>
                                  <td>{!! $data->answer !!}</td>
                                  <td>{{$data->status}}</td>
                              </tr>
                          </tbody>
                      </table>

                  </div><!-- /.box -->
              </div>
          </div>

      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
