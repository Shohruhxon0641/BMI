@extends('../layouts/app')
@section('content')
 <!-- explorer_europe start  -->
 <div class="explorer_europe list_wrap">
    <div class="container">
        <div class="row">
            <div class="filter_wrap">
                <h3 class="exp_title">Majlis honasini qo'shish</h3>
                <div class="filter_main_wrap">
                    <div class="filter_inner">
                        <form action="#">
                            <div class="input_field">
                                <input type="text" placeholder="What are you finding?" >
                                <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button>
                            </div>
                            <div class="input_field">
                                <select class="wide">
                                    <option data-display="Choose categories">cat 1</option>
                                    <option value="1">cat 2</option>
                                    <option value="2">cat 3</option>
                                    <option value="3">cat 4</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <select class="wide">
                                    <option data-display="Joylashgan manzil">Xorazm</option>
                                    <option value="1">Toshkent</option>
                                    <option value="2">Samarqand</option>
                                    <option value="3">Buxoro</option>
                                    <option value="4">Andijon</option>
                                    <option value="5">Nukus</option>
                                </select>
                            </div>
                            <div class="input_field ">
                                <div class="inner">
                                    <div class="check_1">
                                        <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                        <label for="fruit1">Open Now</label>
                                    </div>
                                    <div class="check_1">
                                        <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                        <label for="fruit4">Ratings</label>
                                    </div>
                                </div>
                            </div>
                            <div class="input_field">
                                <select class="wide">
                                    <option data-display="Area (km)">Area (km)</option>
                                    <option value="1">1km</option>
                                    <option value="2">2km</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <select class="wide">
                                    <option data-display="Area (km)">Area (km)</option>
                                    <option value="1">1km</option>
                                    <option value="2">2km</option>
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="last_range">
                        <label for="amount">Price range:</label>

                        <div id="slider-range"></div>
                        <p>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <button class="boxed-btn2" >Reset</button>
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

    <script src="js/gijgo.min.js"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset('assets/js/contact.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/js/mail-script.js')}}"></script>

    <script src="{{ asset('assets/js/main.js')}}"></script>
@endsection
