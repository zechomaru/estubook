@extends('layouts.admin')
@section('header-title')
<h1>
    Pedido # {{$order->id}}
    <!--<small>Sub title</small> -->
</h1>
@endsection
@section('bread-crumb')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href=""><i class="fa fa-link"></i>Pedidos</a></li>
        <li class="active">pedido # {{$order->id}}</li>
    </ol>
@endsection
@section('content')
        <div class="row">
            <div class="form-group col-md-12">
                <div class="table-responsive">

                 <table class="table table-hover">
                   <thead>
                     <tr>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Correo</th>
                       <th>Dirección</th>
                       <th>Telefono</th>
                     </tr>
                   </thead>
                   <tbody>

                       <tr>
                           <td>{{$user->name}}</td>
                           <td>{{$user->lastname}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->direction}}</td>
                           <td>{{$user->phone}}</td>
                           
                   </tbody>
                </table>


                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Pedido</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

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


                    </tbody>
                 </table>
                 <hr>
                 <h3>Libros</h3>
                 <table class="table table-hover">
                   <thead>
                    <tr>
                     <th>Imagen</th>
                     <th>Nombre</th>
                     <th>Cantidad</th>
                     <th>Precio</th>
                     <th>Total</th>
                    </tr>
                   </thead>
                   <tbody>
                     @foreach($order->orderItems as $item)
                        <tr>
                          <td><img src="{{ asset('storage/book/'. $item->book->id . '/thumb/' . $item->book->avatar) }}" alt=""></td>
                          <td>{{$item->book->title}}</td>
                          <td>{{$item->quantity}}</td>
                          <td>{{$item->price}}</td>
                          <td>{{$item->price * $item->quantity}}</td>
                       </tr>
                     @endforeach
                   </tbody>
                 </table>
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
