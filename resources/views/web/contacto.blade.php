@extends('web.layouts.web')
@section('title', 'Institucional')
@section('description', 'Aclisa')
@section('content')


    <!-- Document Wrapper
============================================= -->
    <div id="wrapper" class="clearfix">


        <!-- Sub Page Banner
        ============================================= -->
        <section class="sub-page-banner-contacto text-center">

            <div class="overlay"></div>

            <div class="container">
                <h1 class="entry-title">Contactanos</h1>
                <h6 class="entry-subtitle">Estamos a tu disposición para resolver tus dudas y asesorarte sobre nuestros
                    PRODUCTOS. Contactate y en breve nos comunicaremos.</h6>
            </div>

        </section>


        <!-- Sub Page Content
        ============================================= -->
        <div id="sub-page-content" class="clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-8">

                        <h2 class="light bordered">Dejanos un <span>mensaje</span></h2>


                        <!-- Contact Form
                        ============================================= -->
                        <div class="contact-form clearfix">
                            <div id="message-contact" class="success" style="display:none;">Muchas gracias. Nos
                                contactaremos a la brevedad.
                            </div>

                            {!! Form::open(['route' => 'home.sendContactMail', 'name=' => 'contact_form', 'id'=>'contact_form', 'class' => 'contact-form',  'onSubmit'=>'return false;']) !!}
                            <input type="text" name="name" id="name" placeholder="Nombre" onKeyPress="removeChecks();"
                                   style="">
                            <input type="text" name="email" id="email" placeholder="Email" onKeyPress="removeChecks();"
                                   style="">
                            <input type="text" name="phone" id="phone" placeholder="Teléfono"
                                   onKeyPress="removeChecks();" style="">
                            <input type="text" name="subject" id="subject" placeholder="Asunto"
                                   onKeyPress="removeChecks();" style="">
                            <textarea placeholder="Mensaje" name="message" id="message" style=""></textarea>
                            <input style="float: right" type="submit" class="btn btn-primary" value="Enviar" onClick="validateContact();">
                            {!! Form::close() !!}
                        </div>

                    </div>

                    <div class="col-md-4">

                        <h2 class="light bordered">Medios de <span>Contacto</span></h2>


                        <!-- Get in Touch Widget
                        ============================================= -->
                        <div class="get-in-touch-widget">

                            <div class="col-sm-12 contact-widget">
                                <i class="fa fa-mobile"></i>
                                <p class="phone-number">+54 353 6575912</p>
                                <i class="fa fa-mobile"></i>
                                <p class="phone-number">+54 351 6222862</p>
                                <i class="fa fa-mobile"></i>
                                <p class="phone-number">+54 351 6572098</p>
                                <i class="fa fa-envelope"></i>
                                <p><a href="mailto:info@pellfood.com.ar">info@pellfood.com.ar</a></p>
                            </div>

                            <div class="col-sm-12 contact-widget">
                                <i class="fa fa-globe"></i>
                                <p><a href="http://www.pellfood.com.ar">www.pellfood.com.ar</a></p>
                                <i class="fa fa-home"></i>
                                <p>Sanchez Manzanera 295, Pozo del Molle, Córdoba, Argentina, C.P 5913</p>
                                <i class="fa fa-home"></i>
                                <p>Planta 1, J. D. Perón y 25 de Mayo, sobre Ruta Provincial Nº13, Calchín, Córdoba,
                                    Argentina.</p>
                                <i class="fa fa-home"></i>
                                <p>Planta 2, Zona Industrial Calchín, Ruta Provincial Nº13 km 73, Calchín, Córdoba,
                                    Argentina.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">

                    <div class="col-md-12">
                        <h2 class="light bordered"><span>Encontranos</span></h2>
                        <!-- Map
                        ============================================= -->
                        {{--                    <script src="https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
                                            <script src="js/map.js"></script>--}}
                        <div class="map" id="map"></div>

                    </div>


                </div>
            </div>
            <br><br><br>
        </div><!--end sub-page-content-->


        @endsection

        @section('scripts')
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyDC4IMJMfp61FpNcCg_bQgdSQE9JD5q9c0"
                    type="text/javascript"></script>
            <script src="{{asset('web/js/contact.js')}}" type="text/javascript"></script>
            <script src="{{asset('web/js/gmaps.js')}}" type="text/javascript"></script>

@endsection
