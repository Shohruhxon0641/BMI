@extends('layouts.app')
@section('content')
    <!-- bradcam_area  -->
   <div class="bradcam_area bradcam_bg_2">
       <div class="container">
           <div class="row">
               <div class="col-xl-12">
                   <div class="bradcam_text text-center">
                       <h3>Xona haqidagi fikrlar</h3>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--/ bradcam_area  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                    <!-- <img class="img-fluid" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt=""> -->
                        <img class="img-fluid" src="{{ $room->image }}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>Second divided from form fish beast made every of seas
                        all gathered us saying he our
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="fa fa-user"></i> Ucer</li>
                        <li><i class="fa fa-comments"></i> 03 Fikr topildi</li>
                     </ul>
                     <p class="excert">
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower
                     </p>

                  </div>
               </div>
               <div class="navigation-top">

                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="{{ asset('assets/img/post/preview.png') }}" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Oldingi xona</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Keyingi xona</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="{{ asset('assets/img/post/next.png') }}" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4>Qoldirilgan fikrlar</h4>
                  @foreach($comment as $commit)
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/comment/user-286-64.png') }}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    {{$commit->commit}}
                                    <!-- Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser -->
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                        <!-- <a href="#">Emilly Blunt</a> -->
                                            {{$commit->name}}
                                        </h5>
                                        <p class="date">{{$commit->created_at}} </p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
               </div>
               <div class="comment-form">
                  <h4>Ushbu xona haqida o'z fikrlaringizni qoldiring!</h4>
                  <form class="form-contact comment_form" action="{{ route('comment.store')}}" id="commentForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="commit" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Fikrni joylash</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Xona ma'lumotlari</h4>
                     <table class="table table-bordered">
                        <tr>
                            <th>Bino nomi:</th>
                            <td>{{ $room->bino_name }}</tr>
                        </tr>
                        <tr>
                            <th>Viloyati:</th>
                            <td>{{ $room->viloyat }}</td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td>{{ $room->address }}</td>
                        </tr>
                        <tr>
                            <th>Turi:</th>
                            <td>{{ $room->turi }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-people-fill"></i></th>
                            <td>{{ $room->urindiq_son }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-coin"></i></th>
                            <td>{{ $room->narx . "  so'm" }} </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $room->email }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-telephone-fill"></i></th>
                            <td>{{ $room->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Sharoyitlar:</th>
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
                    </table>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Buyurtma berish</h4>
                     <form action="{{ route('bronroom.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="meeting_name" placeholder="Majlis mavzusi">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="data">
                        </div>
                        <div class="form-group">
                            <input type="time" class="form-control" name="start_time" min="09:00" max="20:00">
                        </div>
                        <div class="form-group ">
                            <input type="time" class="form-control" name="end_time" min="09:00" max="20:00">
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Bron qilish</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
@endsection

@section('script')
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
   <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>

   <!--contact js-->
   <script src="{{ asset('assets/js/contact.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
   <script src="{{ asset('assets/js/mail-script.js') }}"></script>

   <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
