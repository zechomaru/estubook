@extends('layouts.estubook')
  @section('content')
    <div class="container">
      <div class="row" style="padding-top:100px; padding-bottom:100px">
        <h2>Mi Pedido #{{$order->id}}</h2>
        <div class="form-group col-md-12">
            <div class="table-responsive">
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

                        @if($order->status == 0)
                          <td><span class="label label-info">En Proceso</span> </td>
                        @elseif($order->status == 1)
                          <td><span class="label label-success">Enviado</span> </td>
                        @else
                          <td><span class="label label-danger">Cancelado</span> </td>
                        @endif

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
    </div>
  @stop