﻿@extends('layouts.estubook')
  @section('content')
    <div class="container">
      <div class="row" style="padding-top:100px; padding-bottom:100px">
        <h2>Mis Pedidos</h2>
        <div class="form-group col-md-12">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Pedido</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
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

                        <td><a style="font-size:20px" href="{{ route('auth.order-details', $order->id) }}" class="btn btn-template-main btn-sm" ><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
             </table>
          </div>
        </div>
      </div>
    </div>
  @stop