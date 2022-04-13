@extends('layouts.app')

@section('content')
<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <div class="icon">
                            <i class="flaticon-food"></i>
                        </div>
                        <h4>Freshly Food</h4>
                        <p>700/D, Kings road, Green lane, London</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="listing_details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="single_details">
                        <h3>Description</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                        <p>Variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                    </div>
                    <div class="single_details">
                        <h3>Location</h3>
                        <div class="map_Wrap">
                            <div class="d-sm-block ">
                                <div class="map_inner_info">
                                    <div id="map" style="height: 350px;"></div>

                                    <div class="explorer_info">
                                        <h3>Freshly Food</h3>
                                        <p>700/D, Kings road, Green lane, London</p>
                                        <ul>
                                            <li> <i class="fa fa-phone"></i>
                                                +10 278 367 9823</li>
                                            <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                        </ul>
                                    </div>
                                </div>

                                <script>
                                    function initMap() {
                                    var uluru = {lat: -25.363, lng: 131.044};
                                    var grayStyles = [
                                        {
                                        featureType: "all",
                                        stylers: [
                                            { saturation: -90 },
                                            { lightness: 50 }
                                        ]
                                        },
                                        {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
                                    ];
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -31.197, lng: 150.744},
                                        zoom: 9,
                                        styles: grayStyles,
                                        scrollwheel:  false
                                    });
                                    }

                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

                        </div>
                    </div>
                </div>
                <div class="single_details">
                        <h3>Contact Now</h3>
                        <div class="col-lg-12 p-0">
                                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                  <div class="row">

                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                            <div class="form-group">

                                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                                            </div>
                                          </div>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_4 boxed-btn2">Submit</button>
                                  </div>
                                </form>
                              </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- explorer_europe start  -->
    <div class="explorer_europe">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Related Listings</h3>
                    </div>
                </div>
            </div>
                <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/explorer/1.png') }}" alt="">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    <div class="icon">
                                        <i class="flaticon-beach"></i>
                                    </div>
                                    <div class="explorer_info">
                                        <h3><a href="#">Saintmartine</a></h3>
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
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/explorer/2.png') }}" alt="">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    <div class="icon">
                                        <i class="flaticon-food"></i>
                                    </div>
                                    <div class="explorer_info">
                                        <h3><a href="#">Freshly Food</a></h3>
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
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/explorer/3.png') }}" alt="">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    <div class="icon">
                                        <i class="flaticon-food-1"></i>
                                    </div>
                                    <div class="explorer_info">
                                        <h3><a href="#">Midnight</a></h3>
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

        </div>
    </div>
    <!-- explorer_europee end  -->
@endsection

@section('script')
    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>  -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>



    <!--contact js-->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>


    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
