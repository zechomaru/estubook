@extends('layouts.estubook')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="product-big-title-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-bit-title text-center">
            <img src="{{ asset('storage/academy/'. $academy->id . '/thumb/' . $academy->avatar) }}" alt="">
            <h2>{{ $academy->name }}</h2>
            <p class="">{{ $academy->description }}</p>
            <strong>{{ $academy->phone }}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('content')
      <div class="container">
    <div class="row">
      <section>
          <div class="wizard">
              <div class="wizard-inner">
                  <div class="connecting-line"></div>
                  <ul class="nav nav-tabs" role="tablist">

                      <li role="presentation" class="active">
                          <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-folder-open"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="disabled">
                          <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-time"></i>
                              </span>
                          </a>
                      </li>
                      <li role="presentation" class="disabled">
                          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-book"></i>
                              </span>
                          </a>
                      </li>

                      <li role="presentation" class="disabled">
                          <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                              <span class="round-tab">
                                  <i class="glyphicon glyphicon-ok"></i>
                              </span>
                          </a>
                      </li>
                  </ul>
              </div>

              <form role="form" class="wizard_list">
                  <div class="tab-content">
                      <div class="tab-pane active" role="tabpanel" id="step1">
                          <h3></h3>
                          <input type="hidden" value="true" id="stepOne">
                          <p>
                            <ul class="lista">
                            @foreach($academy->careers as $career)
                              <li>
                                <input type="radio" value="{{ $career->id }}" name="career" id="career-{{ $career->id }}">
                                <label for="career-{{ $career->id }}">{{ $career->name }}</label>
                                <div class="check"></div>
                              </li>            
                            @endforeach
                            </ul>
                          </p>

                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                          </ul>


                      </div>
                      <div class="tab-pane" role="tabpanel" id="step2">
                          <h3></h3>
                          <div id="periods">
                            <ul class="lista"></ul>
                          </div>
                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Atras</button></li>
                              <li><button type="button" class="btn btn-primary next-step">Siguiente</button></li>
                          </ul>
                      </div>
                      <div class="tab-pane" role="tabpanel" id="step3">
                          <h3>Selecciona los Libros</h3>
                            <div class="container">
                              <div class="row" id="book_list">
                                
                              </div>
                            </div>
                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Atras</button></li>
                              <li><button type="button" class="btn btn-danger" id="cart_all">Agregar Todos</button></li>
                              <li><button type="button" class="btn btn-success btn-info-full" id="cart-add">Agregar al Carrito</button></li>
                          </ul>
                      </div>
                      <div class="tab-pane" role="tabpanel" id="complete">
                          <h3></h3>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </form>
          </div>
      </section>
     </div>
  </div>


@stop