
@extends('layouts/frontend')
@section('title','đặt phòng')
@section('content')
    <section >
        <img src="{{asset('html/assets/images/banner/datphong.jpg')}}" style="width: 100%; max-height: 500px; margin-top: -40px;">
    </section>

<section class="padding ptb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="headeing pb-30">
                    <h2>thông tin khách hàng </h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <form class="contact-form " id="contact" action="{{asset('datphong/add')}}" method="post" name="myForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div id="success">
                        <div role="alert" class="alert alert-success">
                            <strong>Thanks</strong> for using our template. Your message has been sent.
                        </div>
                    </div>
                    <!-- END IF MAIL SENT SUCCESSFULLY -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-field">
                                <input class="input-sm form-full" id="tenkh" type="text" name="txt_tenkh" placeholder="Your Name">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="sdt" type="text" name="txt_sdt" placeholder="phone number">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="socmnd" type="text" name="txt_socmnd" placeholder="số chứng minh/thẻ căn cước">
                            </div>
                            <div class="form-field">
                                <div class="datphong_di_den">
                                    <span> ngày đến</span>
                                    <input class="input-sm form-full" id="ngayden" type="date" name="txt_ngaynhanphong" value="<?= date('Y-m-d')?>" min="date('Y-m-d')" max="">
                                </div>
                                <div class="datphong_di_den">
                                    <span> ngày đi</span>
                                    <input class="input-sm form-full" id="ngaydi" type="date" name="txt_ngaytraphong"  value="<?= date('Y-m-d')?>" min="date('Y-m-d')" max="">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-field">
                                <textarea class="form-full" id="ghichu" rows="7" name="txt_ghichu" placeholder="Your Message" ></textarea>
                            </div>
                            <div class="form-field" style="padding-top: 25px;">
                                <input class="input-sm form-full" id="user" type="text" name="form-user" placeholder="user / tài khoản nếu có">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="pass" type="password" name="form-pass" placeholder="password /mật khẩu nếu có">
                            </div>
                        </div>
                        <div class="col-lg-12 mt-30">
                            <input class="btn-text" type="submit" value="đặt phòng" >
                        </div>
                    </div>
                </form>
                <!-- END Contact FORM -->
            </div>

            <div class="col-lg-4 contact mt-sm-30 mt-xs-30">
                <div class="headeing pb-20">
                    <h2 class="lien-he">liên hệ phòng tiếp tân</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <div class="contact-info">

                    <ul class="info">
                        <li>
                            <div class="icon ion-android-call"></div>
                            <div class="content">
                                <p>
                                    098 114 3700
                                </p>
                                <p>
                                    096 291 3474
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon ion-ios-email"></div>
                            <div class="content">
                                <p>
                                    email liên hệ
                                </p>
                                <p>
                                    khachsan_muongthanh@gmail.com
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon ion-ios-location"></div>
                            <div class="content">
                                <p>
                                    địa chỉ
                                </p>
                                <p>
                                    số 1 tp.Hà tĩnh
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="event-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Map Section -->

</section>
<!-- Map -->
<section class="map-box">
    <div class="map">
        <div id="map"></div>
    </div>
</section>
<!-- Contact Section -->
<!--End Contact-->
<!-- FOOTER -->
@endsection