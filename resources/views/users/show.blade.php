@extends('../layouts.app')
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2" style="background-color: #052e54;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Sizning Xonalaringiz Show</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- crud create room -->
<!-- <div class="container p-3">
    <h1>Hello world</h1>
    <form class="row g-3" action="#" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="bino_name" class="form-label">Bino nomi</label>
            <input type="text" class="form-control" id="bino_name" placeholder="Tashkilot nomi">
        </div>
        <div class="col-md-6">
            <label for="selectTur" class="form-label">Xona kategoriyalarni tanlang</label>
            <select class="form-select" aria-label="Xona kategoriyalarni tanlang" name="tur" id="selectTur">
                <option value="oddiy" selected>Oddiy</option>
                <option value="urta">O'rta</option>
                <option value="maxsus">Maxsus</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="selectViloyat" class="form-label">Qaysi viloyatda joylashgan</label>
            <select class="form-select" aria-label="Viloyat nomi" name="viloyat" id="selectViloyat">
                <option value="Toshkent" selected >Toshkent</option>
                <option value="Xorazm">Xorazm</option>
                <option value="Samarqand">Samarqand</option>
                <option value="Buxoro">Buxoro</option>
                <option value="Andijon">Andijon</option>
                <option value="Nukus">Nukus</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Jaylashgan manzili</label>
            <input type="address" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPhoneNumber" class="form-label">Phone Number</label>
            <input type="phoneNumber" class="form-control" id="inputPhoneNumber">
        </div>

        <div class="col-md-6">
            <label for="narx" class="form-label">1 soat uchun qo'yiladigan narx</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" id="narx" aria-label="Amount (to the nearest dollar)">
            </div>
            <label for="urindiq-soni" class="form-label">O'rindiqlar soni</label>
            <div class="input-group ">
                <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                <input type="text" id="urindiq-soni" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>
            <label for="" class="form-label">Qo'shimcha sharoitlar:</label>
            <div class="inner d-flex" id="imkoniyatlar">
                <div class="input_field " >
                    <div class="check_1">
                        <input type="checkbox" id="fruit1" name="cofe" value="1">
                        <label for="fruit1" >Coffee / Choy <i class="bi bi-cup-fill"></i></label>
                    </div>
                    <div class="check_1">
                        <input type="checkbox" id="fruit2" name="ovqat" value="1">
                        <label for="fruit2" >Ovqatlanish imkoniyati <i class="bi bi-egg-fried"></i></label>
                    </div>
                    <div class="check_1">
                        <input type="checkbox" id="fruit3" name="sovutish" value="1" >
                        <label for="fruit3" >Konditsioner  <i class="bi bi-thermometer-snow"></i></label>
                    </div>
                    <div class="check_1">
                        <input type="checkbox" id="fruit4" name="hojathona" value="1">
                        <label for="fruit4" >Hojatxona  <i class="bi bi-file-person"></i></label>
                    </div>
                </div>
                <div class="input_field">
                    <div class="check_1">
                        <input type="checkbox" id="fruit5" name="proyektr" value="1">
                        <label for="fruit5" >Proyektr  <i class="bi bi-projector"></i></label>
                    </div>
                    <div class="check_1">
                        <input type="checkbox" id="fruit6" name="wi_fi" value="1">
                        <label for="fruit6" >Wi-fi  <i class="bi bi-wifi"></i></label>
                    </div>
                    <div class="check_1">
                        <input type="checkbox" id="fruit7" name="o_kuch" value="1">
                        <label for="fruit7" >Ovoz kuchaytirgich  <i class="bi bi-volume-up-fill"></i></label>
                    </div>
                    <div class="check_1">
                        <input type="checkbox" id="fruit8" name="computer" value="1">
                        <label for="fruit8" >Kompyuterlar xizmati <i class="bi bi-pc-display"></i></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="Image" class="form-label">Photo room</label>
            <div class="">
                <img src="/images/20220614192352.jpg" alt="" class="w-100">
            </div>
            <div class="mt-3">
                <input type="file" id="inputImage" name="image" class="form-control">
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Button</button>
        </div>
    </form>
</div> -->
<!-- end crud create room -->

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
                <td><img src="/images/{{ $room->image }}" alt="" width="300px"></td>
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
            <a href="{{ url('users') }}" class="btn btn-dark">Ortga</a>
            <a href="{{ route('users.edit', $room->id) }}" class="btn btn-warning">Yangilash</a>
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
