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

<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Form Element</h3>
                    <form action="#">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="First Name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                                class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                                class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="EMAIL" placeholder="Email address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                                class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                            <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select"">
                                        <select>
                                            <option value=" 1">City</option>
                                <option value="1">Dhaka</option>
                                <option value="1">Dilli</option>
                                <option value="1">Newyork</option>
                                <option value="1">Islamabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select"">
                                        <select>
                                            <option value=" 1">Country</option>
                                <option value="1">Bangladesh</option>
                                <option value="1">India</option>
                                <option value="1">England</option>
                                <option value="1">Srilanka</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-10">
                            <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Message'" required></textarea>
                        </div>
                        <!-- For Gradient Border Use -->
                        <!-- <div class="mt-10">
                                    <div class="primary-input">
                                        <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                                        <label for="primary-input"></label>
                                    </div>
                                </div> -->
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Primary color"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
                                class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Accent color"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
                                class="single-input-accent">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Secondary color"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
                                required class="single-input-secondary">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <div class="single-element-widget">
                        <h3 class="mb-30">Switches</h3>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>01. Sample Switch</p>
                            <div class="primary-switch">
                                <input type="checkbox" id="default-switch">
                                <label for="default-switch"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>02. Primary Color Switch</p>
                            <div class="primary-switch">
                                <input type="checkbox" id="primary-switch" checked>
                                <label for="primary-switch"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>03. Confirm Color Switch</p>
                            <div class="confirm-switch">
                                <input type="checkbox" id="confirm-switch" checked>
                                <label for="confirm-switch"></label>
                            </div>
                        </div>
                    </div>
                    <div class="single-element-widget mt-30">
                        <h3 class="mb-30">Selectboxes</h3>
                        <div class="default-select" id="default-select"">
                                    <select>
                                        <option value=" 1">English</option>
                            <option value="1">Spanish</option>
                            <option value="1">Arabic</option>
                            <option value="1">Portuguise</option>
                            <option value="1">Bengali</option>
                            </select>
                        </div>
                    </div>
                    <div class="single-element-widget mt-30">
                        <h3 class="mb-30">Checkboxes</h3>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>01. Sample Checkbox</p>
                            <div class="primary-checkbox">
                                <input type="checkbox" id="default-checkbox">
                                <label for="default-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>02. Primary Color Checkbox</p>
                            <div class="primary-checkbox">
                                <input type="checkbox" id="primary-checkbox" checked>
                                <label for="primary-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>03. Confirm Color Checkbox</p>
                            <div class="confirm-checkbox">
                                <input type="checkbox" id="confirm-checkbox">
                                <label for="confirm-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>04. Disabled Checkbox</p>
                            <div class="disabled-checkbox">
                                <input type="checkbox" id="disabled-checkbox" disabled>
                                <label for="disabled-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>05. Disabled Checkbox active</p>
                            <div class="disabled-checkbox">
                                <input type="checkbox" id="disabled-checkbox-active" checked disabled>
                                <label for="disabled-checkbox-active"></label>
                            </div>
                        </div>
                    </div>
                    <div class="single-element-widget mt-30">
                        <h3 class="mb-30">Radios</h3>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>01. Sample radio</p>
                            <div class="primary-radio">
                                <input type="checkbox" id="default-radio">
                                <label for="default-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>02. Primary Color radio</p>
                            <div class="primary-radio">
                                <input type="checkbox" id="primary-radio" checked>
                                <label for="primary-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>03. Confirm Color radio</p>
                            <div class="confirm-radio">
                                <input type="checkbox" id="confirm-radio" checked>
                                <label for="confirm-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>04. Disabled radio</p>
                            <div class="disabled-radio">
                                <input type="checkbox" id="disabled-radio" disabled>
                                <label for="disabled-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>05. Disabled radio active</p>
                            <div class="disabled-radio">
                                <input type="checkbox" id="disabled-radio-active" checked disabled>
                                <label for="disabled-radio-active"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
