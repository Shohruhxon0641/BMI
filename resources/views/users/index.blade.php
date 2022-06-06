@extends('../layouts/app')
@section('content')
 <!-- explorer_europe start  -->
 <div class="explorer_europe list_wrap" style="background-color: #052e54;">
    <div class="container">
        <!-- <button href="{{ url('/users.create') }}">Create Rooms</button> -->
        <a href="{{url('/users/create')}}" class="btn"> create</a>
        <div class="row">
            <div class="filter_wrap">
                <div class="filter_main_wrap">
                    <div class="filter_inner">
                        <form action="#" method="GET">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ explorer_europe start  -->

<!-- Start Align Area -->
<div class="whole-wrap">
		<div class="container box_1170">

			<div class="section-top-border">
				<h3 class="mb-30">Table</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Countries</div>
							<div class="visit">Visits</div>
							<div class="percentage">Percentages</div>
						</div>
						<div class="table-row">
							<div class="serial">01</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f1.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" style="width: 80%"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">02</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f2.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" style="width: 30%"
										aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">03</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f3.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" style="width: 55%"
										aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">04</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f4.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-4" role="progressbar" style="width: 60%"
										aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">05</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f5.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" style="width: 40%"
										aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">06</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f6.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-6" role="progressbar" style="width: 70%"
										aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">07</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f7.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-7" role="progressbar" style="width: 30%"
										aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<div class="table-row">
							<div class="serial">08</div>
							<div class="country"> <img src="{{ asset('assets/img/elements/f8.jpg') }}" alt="flag">Canada</div>
							<div class="visit">645032</div>
							<div class="percentage">
								<div class="progress">
									<div class="progress-bar color-8" role="progressbar" style="width: 60%"
										aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="{{ asset('assets/img/elements/g1.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g1.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('assets/img/elements/g2.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g2.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('assets/img/elements/g3.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g3.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="{{ asset('assets/img/elements/g4.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g4.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="{{ asset('assets/img/elements/g5.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g5.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('assets/img/elements/g6.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g6.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('assets/img/elements/g7.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g7.jpg') }});"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('assets/img/elements/g8.jpg') }}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('assets/img/elements/g8.jpg') }});"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
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

    <script src="{{asset('assets/js/gijgo.min.js') }}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset('assets/js/contact.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/js/mail-script.js')}}"></script>

    <script src="{{ asset('assets/js/main.js')}}"></script>
@endsection

