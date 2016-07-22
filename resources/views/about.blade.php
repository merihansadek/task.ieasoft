@extends('master')
@section('content')
<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="images/1.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">تواصل معنا</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <form>
                    <input type="text" placeholder="الاسم">
                    <input type="tel" placeholder="رقم الهاتف">
                    <input type="email" placeholder="بريدك الالكتروني">
                    <input type="text" placeholder="عنوان الرسالة">
                    <textarea placeholder="الرسالة"></textarea>
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="إشترك"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">تفاصيل الاتصال</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> Info@pmstu.com</p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">للاشتراك فالقائمة البريدية</h3>

                    <form>
                        <input type="email" placeholder="بريدك الالكتروني">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="إشترك"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@stop
