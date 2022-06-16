@extends('../layouts/app')
@section('content')
 <!-- explorer_europe start  -->
 <div class="explorer_europe list_wrap" style="background-color: #052e54;">
    <div class="container">
        <!-- <div class="row">
            <div class="filter_wrap">
                <h3 class="exp_title" style="color: #f9f9ff;">Majlis xonasini qo'shish</h3>
                <div class="filter_main_wrap">
                    <div class="filter_inner">
                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input_field">
                                <input type="text" name="bino_name" placeholder="Tashkilot yoki bino nomi"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tashkilot yoki bino nomi'" required
                                    class="single-input">
                            </div>
                            <div class="input_field">
                                <input type="email" name="email" placeholder="Email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
                                    class="single-input">
                            </div>
                            <div class="input_field">
                                <input type="phoneNumber" name="phoneNumber" placeholder="Tel:" >
                            </div>

                            <div class="input_field">
                                <input type="text" id="address" name="address" placeholder="Viloyat/tuman ..." >
                            </div>

                            <div class="input_field">
                                <select class="wide" name="tur">
                                    <option data-display="Xona kategoriyalarni tanlang" >Bo'sh</option>
                                    <option value="oddiy">Oddiy</option>
                                    <option value="urta">O'rta</option>
                                    <option value="maxsus">Maxsus</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <select class="wide" name="viloyat">
                                    <option data-display="Joylashgan viloyati: ">Xorazm</option>
                                    <option value="Toshkent">Toshkent</option>
                                    <option value="Samarqand">Samarqand</option>
                                    <option value="Buxoro">Buxoro</option>
                                    <option value="Andijon">Andijon</option>
                                    <option value="Nukus">Nukus</option>
                                </select>
                            </div>
                            <div>
                                <label for="imkoniyatlar" style="color: #f9f9ff;">Qo'shimcha imkoniyatlar</label>
                                <div class="input_field " >
                                    <div class="inner" id="imkoniyatlar">
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit1" name="cofe" value="1">
                                            <label for="fruit1" style="color: #f9f9ff;">Coffee / Choy</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit2" name="ovqat" value="1">
                                            <label for="fruit2" style="color: #f9f9ff;">Ovqatlanish imkoniyati</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit3" name="sovutish" value="1" >
                                            <label for="fruit3" style="color: #f9f9ff;">Konditsioner</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit4" name="hojathona" value="1">
                                            <label for="fruit4" style="color: #f9f9ff;">Hojatxona</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit5" name="proyektr" value="1">
                                            <label for="fruit5" style="color: #f9f9ff;">Proyektr</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit6" name="wi_fi" value="1">
                                            <label for="fruit6" style="color: #f9f9ff;">Wi-fi</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit7" name="o_kuch" value="1">
                                            <label for="fruit7" style="color: #f9f9ff;">Ovoz kuchaytirgich</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit8" name="computer" value="1">
                                            <label for="fruit8" style="color: #f9f9ff;">Kompyuterlar xizmati</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="last_range">
                                <label for="amount" style="color: #f9f9ff;" >O'rindiqlar soni</label>

                                <div class="input_field" >
                                    <input type="text" name="u_son" placeholder="Qancha mijozga mo'jjallangan:">
                                </div>
                                <div class="input_field">
                                    <input type="text" name="narx" placeholder="1 soat uchun qo'yiladigan summa">
                                </div>
                                <div class="input_field">
                                    <div class="mb-3">
                                        <label for="formFileMultiple" style="color: #f9f9ff;" class="form-label">Fotosuratlarni joylang</label>
                                        <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                                    </div>
                                </div>
                                <button class="boxed-btn2" >Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!--/ explorer_europe start  -->

<!-- yangi create list -->
<div class="container p-3">
    <h1>Hello world</h1>
    <form class="row g-3" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="bino_name" class="form-label">Bino nomi</label>
            <input type="text" name="bino_name" class="form-control" id="bino_name" placeholder="Tashkilot nomi">
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
            <input type="address" name="address" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPhoneNumber" class="form-label">Phone Number</label>
            <input type="phoneNumber" name="phoneNumber" class="form-control" id="inputPhoneNumber">
        </div>

        <div class="col-md-6">
            <label for="narx" class="form-label">1 soat uchun qo'yiladigan narx</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" name="narx" class="form-control" id="narx" aria-label="Amount (to the nearest dollar)">
            </div>
            <label for="urindiq-soni" class="form-label">O'rindiqlar soni</label>
            <div class="input-group ">
                <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                <input type="text" name="u_son" id="urindiq-soni" class="form-control" aria-label="Amount (to the nearest dollar)">
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
            <button class="btn btn-primary" type="submit">Yaratish</button>
        </div>
    </form>
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
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
@endsection
