@extends('layouts.app')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_listing  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center">
                            <h3>Bizning ro'yxatlarimiz</h3>
                            <div class="search_form">
                                <form action="#">
                                    <div class="row align-items-center">
                                        <div class="col-xl-5 col-md-4">
                                            <div class="input_field">
                                                <input type="text" placeholder="What are you finding?">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-4">
                                            <div class="input_field location">
                                                <input type="text" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4">
                                            <div class="button_search">
                                                <button class="boxed-btn2" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- explorer_europe start  -->
    <div class="explorer_europe list_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="filter_wrap">
                        <h3 class="exp_title">Kengaytirilgan Saralash</h3>
                        <div class="filter_main_wrap">
                            <div class="filter_inner">
                                <form action="#">
                                    <div class="input_field">
                                        <input type="text" placeholder="Qanday xona qidiryapsiz??" >
                                        <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button>
                                    </div>
                                    <div class="input_field">
                                        <select class="wide" aria-label="Xona kategoriyalarni tanlang" name="turi" id="selectTur">
                                            <option value="oddiy" selected>Oddiy</option>
                                            <option value="urta">O'rta</option>
                                            <option value="maxsus">Maxsus</option>
                                        </select>
                                    </div>
                                    <div class="input_field">
                                        <select class="wide" aria-label="Viloyat nomi" name="viloyat" id="selectViloyat">
                                            <option value="Toshkent" selected >Toshkent</option>
                                            <option value="Xorazm">Xorazm</option>
                                            <option value="Samarqand">Samarqand</option>
                                            <option value="Buxoro">Buxoro</option>
                                            <option value="Andijon">Andijon</option>
                                            <option value="Nukus">Nukus</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="last_range">
                                <label for="amount">O'rindiqlar soni:</label>

                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                </p>
                                <button class="boxed-btn2" >Qidirish</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                        <h3 class="exp_title">Mavjud xonalar ro'yhati</h3>
                        <div class="row">
                                @foreach($rooms as $room)
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single_explorer">
                                            <div class="thumb">
                                                <img src="/images/{{ $room->image }}" alt="">
                                                <img src="{{ $room->image }}" alt="">
                                            </div>
                                            <div class="explorer_bottom d-flex">
                                                <div class="icon">
                                                    <i class="flaticon-beach"></i>
                                                </div>
                                                <div class="explorer_info">
                                                    <h3><a href="{{ url('comment', $room->id) }}">{{ $room->bino_name }}</a></h3>
                                                    <p>{{ $room-> address }}</p>
                                                    <ul>
                                                        <li> <i class="fa fa-phone"></i>
                                                            {{ $room->phone_number }}</li>
                                                        <li><i class="fa fa-envelope"></i> {{$room->email}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/explorer/2.png')}}" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-food"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="{{ url('/singleList') }}">Freshly Food</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/explorer/3.png')}}" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-food-1"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="{{ url('/singleList') }}">Midnight</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/explorer/4.png')}}" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-barbershop"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="{{ url('/singleList') }}">Barber</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/explorer/5.png')}}" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-cabin"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="{{ url('/singleList') }}">Montana Resort</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="{{asset('assets/img/explorer/6.png')}}" alt="">
                                        </div>
                                        <div class="explorer_bottom d-flex">
                                            <div class="icon">
                                                <i class="flaticon-shop"></i>
                                            </div>
                                            <div class="explorer_info">
                                                <h3><a href="{{ url('/singleList') }}">Yelled Shopping</a></h3>
                                                <p>700/D, Kings road, Green lane, London</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        +10 278 367 9823</li>
                                                    <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page_nation text-center">
                                <ul>
                                    <li>
                                        <a href="#">01</a>
                                    </li>
                                    <li>
                                        <a href="#">02</a>
                                    </li>
                                    <li>
                                        <a href="#">03</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="ti-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--/ explorer_europe start  -->
@endsection

@section('script')

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/js/scrollIt.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>

    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset('assets/js/contact.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/js/mail-script.js')}}"></script>

    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 75, 300 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
                " - " + $( "#slider-range" ).slider( "values", 1 ) );
        } );
    </script>
@endsection
