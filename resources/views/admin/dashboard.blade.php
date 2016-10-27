@extends('layouts.admin')


@section('header-title')
    <h1>
        Dashboard
        <!--<small>Sub title</small> -->
    </h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li class="active"> <i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
@endsection

@section('content')

    <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Usuarios</span>
                  <span class="info-box-number">{{$user}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Instutuciones</span>
                  <span class="info-box-number">{{$academy}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Libros</span>
                  <span class="info-box-number">{{$book}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Autores</span>
                  <span class="info-box-number">{{$author}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Pedidos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <thead>
                              <th>Pedido</th>
                              <th>Fecha</th>
                              <th>Total</th>
                              <th>Status</th>
                              <th>Acciones</th>                              
                            </thead>
                            <tbody>
                              @foreach($orders as $order)
                                <tr>
                                    <th># {{$order->id}}</th>
                                    <td>{{$order->created_at}}</td>
                                    <td>$ {{$order->total}}</td>
                                    <td>
                                      <select class="status" name="" data-order="{{$order->id}}">
                                        @for ($i = 0; $i < count($status); $i++)
                                          @if($order->status == $i)
                                            <option value="{{$i}}" selected>{{$status[$i]}}</option>
                                          @else
                                            <option value="{{$i}}">{{$status[$i]}}</option>
                                          @endif
                                        @endfor
                                      </select>
                                    </td>
                                    <td><a style="font-size:20px" href="{{route('admin.details-order', $order->id)}}" class="btn btn-template-main btn-sm order-details" ><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $orders->links() }}
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
          </div>



          <div id="myModal" class="modal fade" role="dialog" tabindex="-1">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body">
                          <p>The content of your modal.</p>
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                          <button class="btn btn-primary" type="button">Save</button>
                      </div>
                  </div>
              </div>
          </div>





          <script>
            $(document).ready(function() {
              $.ajaxSetup({
                             headers: {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                     });
              $('.status').change(function(e) {
                $data = $(this).val();
                $id = $(this).data('order');
                changeStatus($id, $data);
              });

              function changeStatus(id, data){
                return $.ajax({
                     method: "PUT",
                     url: '{!! route("admin.order-status.edit") !!}',
                     data: {id: id, data: data},
                 });
              }
            });
          </script>
@endsection
