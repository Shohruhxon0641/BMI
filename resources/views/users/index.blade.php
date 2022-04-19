@extends('../layouts/app')
@section('content')
 <!-- explorer_europe start  -->
 <div class="explorer_europe list_wrap" style="background-color: #052e54;">
    <div class="container">
        <div class="row">
            <div class="filter_wrap">
                <h3 class="exp_title" style="color: #f9f9ff;">Majlis xonasini qo'shish</h3>
                <div class="filter_main_wrap">
                    <div class="filter_inner">
                        <form action="#" method="GET">
                            <div class="input_field">
                                <label for="test2" style="color: #f9f9ff;">Tashkilot yoki bino nomi:</label>
                                <input type="text" id="test2" placeholder="Name" >
                            </div>
                            <div class="input_field">
                                <input type="text" placeholder="test" >
                            </div>
                            <div class="input_field">
                                <input type="text" id="address" placeholder="Viloyat/tuman ..." >
                            </div>
                            <div class="input_field">
                                <select class="wide">
                                    <option data-display="Xona kategoriyalarni tanlang">Oddiy</option>
                                    <option value="1">Bo'sh</option>
                                    <option value="2">O'rta</option>
                                    <option value="3">Maxsus</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <select class="wide">
                                    <option data-display="Joylashgan viloyati: ">Xorazm</option>
                                    <option value="1">Toshkent</option>
                                    <option value="2">Samarqand</option>
                                    <option value="3">Buxoro</option>
                                    <option value="4">Andijon</option>
                                    <option value="5">Nukus</option>
                                </select>
                            </div>
                            <div>
                                <label for="" style="color: #f9f9ff;">Qo'shimcha imkoniyatlar</label>
                                <div class="input_field " >
                                    <div class="inner" id="imkoniyatlar">
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit1" name="fruit-1" value="#">
                                            <label for="fruit1" style="color: #f9f9ff;">Coffee / Choy</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit2" name="fruit-2" value="#">
                                            <label for="fruit2" style="color: #f9f9ff;">Ovqatlanish imkoniyati</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit3" name="fruit-3" value="#">
                                            <label for="fruit3" style="color: #f9f9ff;">Konditsioner</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit4" name="fruit-4" value="#">
                                            <label for="fruit4" style="color: #f9f9ff;">Hojatxona</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit5" name="fruit-5" value="#">
                                            <label for="fruit5" style="color: #f9f9ff;">Proyektr</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit6" name="fruit-6" value="#">
                                            <label for="fruit6" style="color: #f9f9ff;">Wi-fi</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit7" name="fruit-7" value="#">
                                            <label for="fruit7" style="color: #f9f9ff;">Ovoz kuchaytirgich</label>
                                        </div>
                                        <div class="check_1">
                                            <input type="checkbox" id="fruit8" name="fruit-8" value="#">
                                            <label for="fruit8" style="color: #f9f9ff;">Kompyuterlar xizmati</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="last_range">
                                <label for="amount" style="color: #f9f9ff;">O'rindiqlar soni</label>

                                <div class="input_field" >
                                    <input type="text"  placeholder="Qancha mijozga mo'jjallangan:">
                                </div>
                                <div class="input_field">
                                    <input type="text" placeholder="1 soat uchun qo'yiladigan summa">
                                </div>
                                <div class="input_field">
                                    <div class="mb-3">
                                        <label for="formFileMultiple" style="color: #f9f9ff;" class="form-label">Fotosuratlarni joylang</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                </div>
                                <button class="boxed-btn2" >Add</button>
                            </div>
                        </form>
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

