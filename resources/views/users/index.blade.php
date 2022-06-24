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
                                <!-- <th scope="row">{{ (($rooms->currentpage()-1)*$rooms->perpage()+($loop->index+1)) }}</th> -->
                                <th scope="row">{{ $room->id }}</th>
                                <td>{{ $room->bino_name }}</td>
                                <td>{{ $room->viloyat }}</td>
                                <td>{{ $room->address }}</td>
                                <td>{{ $room->turi }}</td>
                                <td>{{ $room->urindiq_son }}</td>
                                <td>{{ $room->narx }}</td>
                                <td>{{ $room->email }}</td>
                                <td>{{ $room->phone_number }}</td>
                                <td>
                                    <a href="{{ route('users.show', $room->id) }}" >
                                        <i class="bi {{ $room->cofe_tea ? 'bi-cup-fill' : '' }}"></i>
                                        <i class="bi {{ $room->sovutish ? 'bi-thermometer-snow' : '' }}"></i>
                                        <i class="bi {{ $room->wi_fi ? 'bi-wifi' : '' }}"></i>
                                        <i class="bi {{ $room->hojatxona ? 'bi-file-person' : '' }}"></i>
                                        <i class="bi {{ $room->proyektr ? 'bi-projector' : '' }}"></i>
                                        <i class="bi {{ $room->ovoz_kuch ? 'bi-volume-up-fill' : '' }}"></i>
                                        <i class="bi {{ $room->kompyuter ? 'bi-pc-display' : '' }}"></i>
                                        <i class="bi {{ $room->ovqatlanish ? 'bi-egg-fried' : '' }}"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $rooms->links() }}
			</div>
            <div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
					@foreach($rooms as $room)
                        <div class="col-md-4">
                            <img src="{{ $room->image }}" alt="" width="300px">
                        </div>
                    @endforeach
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

