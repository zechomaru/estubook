@extends('layouts.estubook')
  
  @section('header')
    <div class="slider-area">
      <div class="zigzag-bottom"></div>
      <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
        <!-- <div class="slide-bulletz">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="carousel-indicators slide-indicators">
                            <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                            <li data-target="#slide-list" data-slide-to="1"></li>
                            <li data-target="#slide-list" data-slide-to="2"></li>
                        </ol>                            
                    </div>
                </div>
            </div>
        </div> -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="single-slide">
              <div class="slide-bg" style="background-image: url('img/header.jpg')"></div>
                <div class="slide-text-wrapper">
                  <div class="slide-text">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <img sizes="(max-width: 400px) 90vw, 400px" srcset="img/logo-img-principal_yhzkmq.png 540w" src="img/logo-img-principal_yhzkmq.png" alt="">
                        </div>
                        <div class="col-md-6">
                          <div class="slide-content">
                            <h2>La mejor manera de comprar tus libros</h2>
                            <p>Solo busca tu Colegio/Universidad.</p>
                            <p>
                              <form class="" role="search">
                                <select id="searchbox" placeholder="Busca, Ahorra Tiempo y Dinero" class="form-control"></select>
                              </form>
                            </p>
                            <a href="" class="readmore">Como funciona</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>        
    </div> <!-- End slider area -->
  @stop


  @section('promo')
    <div class="promo-area">
      <div class="zigzag-bottom"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="single-promo">
              <i class="fa fa-refresh"></i>
              <p>30 Dias de Garantia</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-promo">
              <i class="fa fa-truck"></i>
              <p>Envio Gratis</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-promo">
              <i class="fa fa-lock"></i>
              <p>Pago Seguro</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-promo">
              <i class="fa fa-gift"></i>
              <p>Productos Nuevos</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End promo area -->
  @stop

  @section('comoFunciona')
    <div class="services-container section-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 services section-description wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
            <h2 class="text-center">Como Funciona</h2>
            <div class="divider-1 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"><span></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 services-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
              <div class="col-sm-4">
                <div class="services-box-icon">
                  <i>1</i>
                </div>
              </div>
              <div class="col-sm-8">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 services-box wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="row">
              <div class="col-sm-4">
                <div class="services-box-icon">
                  <i>2</i>
                </div>
              </div>
              <div class="col-sm-8">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 services-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="row">
              <div class="col-sm-4">
                <div class="services-box-icon">
                  <i>3</i>
                </div>
              </div>
              <div class="col-sm-8">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @stop


  @section('testimonios')
    <div class="testimonials-container section-container section-container-image-bg" style="position: relative; z-index: 0; background: none;">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12 testimonials section-description wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div role="tabpanel">
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade" id="tab1">
                              <div class="testimonial-image">
                                <img src="/img/testimonials/1.jpg" alt="" data-at2x="/img/testimonials/1.jpg" style="width: auto !important; height: auto !important;">
                              </div>
                              <div class="testimonial-text">
                                        <p>
                                          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                          Lorem ipsum dolor sit amet, consectetur..."<br>
                                          <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                        </p>
                                      </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                              <div class="testimonial-image">
                                <img src="/img/testimonials/2.jpg" alt="" data-at2x="/img/testimonials/2.jpg" style="width: auto !important; height: auto !important;">
                              </div>
                              <div class="testimonial-text">
                                        <p>
                                          "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                          ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                          lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                          <a href="#">Minim Veniam, nostrud.com</a>
                                        </p>
                                      </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                              <div class="testimonial-image">
                                <img src="/img/testimonials/3.jpg" alt="" data-at2x="/img/testimonials/3.jpg" style="width: auto !important; height: auto !important;">
                              </div>
                              <div class="testimonial-text">
                                        <p>
                                          "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                          Lorem ipsum dolor sit amet, consectetur..."<br>
                                          <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                        </p>
                                      </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active in" id="tab4">
                              <div class="testimonial-image">
                                <img src="/img/testimonials/4.jpg" alt="" data-at2x="/img/testimonials/4.jpg" style="width: auto !important; height: auto !important;">
                              </div>
                              <div class="testimonial-text">
                                        <p>
                                          "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                          ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                          lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                          <a href="#">Minim Veniam, nostrud.com</a>
                                        </p>
                                      </div>
                            </div>
                          </div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="">
                              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" aria-expanded="false"></a>
                            </li>
                            <li role="presentation" class="">
                              <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" aria-expanded="false"></a>
                            </li>
                            <li role="presentation" class="">
                              <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" aria-expanded="false"></a>
                            </li>
                            <li role="presentation" class="active">
                              <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab" aria-expanded="true"></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </div>
              </div>
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 510px; width: 100%; z-index: -999998; position: absolute;"><img src="/img/backgrounds/21.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: auto; height: auto; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -200.333px;"></div></div>

  @stop

  @section('footer')


  @stop