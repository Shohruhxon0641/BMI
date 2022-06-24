@extends('../layouts.app')
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area ">
    <!-- style="background-color: #052e54;" -->
</div>
<!--/ bradcam_area  -->


<div class="whole-wrap">
	<div class="container mt-5">
        <h3>id={{$room->id}} ga teng bo'lgan xona ma'lumotlari</h1>
        <table class="table table-bordered">
            <tr>
                <th>Tashkilot yoki bino nomi:</th>
                <td>{{ $room->bino_name }}</tr>
            </tr>
            <tr>
                <th>Jaylashgan viloyati:</th>
                <td>{{ $room->viloyat }}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{ $room->address }}</td>
            </tr>
            <tr>
                <th>Xona turi:</th>
                <td>{{ $room->turi }}</td>
            </tr>
            <tr>
                <th>O'rindiqlar soni:</th>
                <td>{{ $room->urindiq_son }}</td>
            </tr>
            <tr>
                <th>1 soat uchun qo'yiladigan narx:</th>
                <td>{{ $room->narx }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $room->email }}</td>
            </tr>
            <tr>
                <th>Telefon raqami:</th>
                <td>{{ $room->phone_number }}</td>
            </tr>
            <tr>
                <th>Xona photo:</th>
                <td><img src="{{ $room->image }}" alt="" width="300px"></td>
            </tr>
            <tr>
                <th>Xonadagi qo'shimcha sharoyitlar:</th>
                <td>
                    <i class="bi {{ $room->cofe_tea ? 'bi-cup-fill' : '' }}"></i>
                    <i class="bi {{ $room->sovutish ? 'bi-thermometer-snow' : '' }}"></i>
                    <i class="bi {{ $room->wi_fi ? 'bi-wifi' : '' }}"></i>
                    <i class="bi {{ $room->hojatxona ? 'bi-file-person' : '' }}"></i>
                    <i class="bi {{ $room->proyektr ? 'bi-projector' : '' }}"></i>
                    <i class="bi {{ $room->ovoz_kuch ? 'bi-volume-up-fill' : '' }}"></i>
                    <i class="bi {{ $room->kompyuter ? 'bi-pc-display' : '' }}"></i>
                    <i class="bi {{ $room->ovqatlanish ? 'bi-egg-fried' : '' }}"></i>
                </td>
            </tr>
            <tr>
                <th>Yaratilgan vaqti:</th>
                <td>{{ $room->created_at }}</td>
            </tr>
        </table>
        <div>
            <a href="{{ url('users') }}" class="btn btn-secondary">Ortga</a>
            <a href="{{ route('users.edit', $room->id) }}" class="btn btn-info">O'zgartirish</a>
            <a href="{{ url('users.delete', $room->id) }}" class="btn btn-danger">O'chirish</a>
        </div>
    </div>
</div>
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
