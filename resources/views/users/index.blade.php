@extends('../layouts/app')
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2" style="background-color: #052e54;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Sizning Xonalaringiz</h3>
                    <a href="{{url('/users/create')}}" class="genric-btn success radius">Create Room</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- Start Align Area -->
<div class="whole-wrap">
		<div class="container box_1170">

			<div class="section-top-border">
				<h3 class="mb-30">Table</h3>
				<!-- <div class="progress-table-wrap">
					<div class="progress-table">

						<div class="table-head">
							<div class="serial">T/R</div>
							<div class="country">Bino nomi</div>
							<div class="visit">State</div>
							<div class="percentage">NARXI</div>
                            <div class="visit">State</div>
                            <div class="visit">State</div>
						</div>

                        @foreach($rooms as $room)
                            <div class="table-row">
                                <div class="serial">{{($loop -> index+1)}}</div>
                                <div class="country"> {{$room -> bino_name}}</div>
                                <div class="visit">{{$room -> viloyat}}</div>
                                <div class="percentage">{{$room -> narx}}</div>
                            </div>
                        @endforeach
					</div>
				</div> -->
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bino nomi</th>
                            <th scope="col">Viloyat</th>
                            <th scope="col">Address</th>
                            <th scope="col">Xona turi</th>
                            <th scope="col">Urindiq son</th>
                            <th scope="col">Narx</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tel:</th>
                            <th scope="col">Imkoniyatlari</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                            <tr>
                                <th scope="row">{{ ( $loop -> index+1 ) }}</th>
                                <td>{{ $room->bino_name }}</td>
                                <td>{{ $room->viloyat }}</td>
                                <td>{{ $room->address }}</td>
                                <td>{{ $room->turi }}</td>
                                <td>{{ $room->urindiq_son }}</td>
                                <td>{{ $room->narx }}</td>
                                <td>{{ $room->email }}</td>
                                <td>{{ $room->phone_number }}</td>
                                <td>{{ $room->wi_fi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

