@extends('master')
@section('content')
<!--===============================
    SLIDER
===================================-->

<div id="owl-demo" class="owl-carousel owl-theme">

    <div class="item"><img src="images/1.jpg" alt="..."></div>
    <div class="item"><img src="images/2.jpg" alt="..."></div>
    <div class="item"><img src="images/3.jpg" alt="..."></div>

</div>

<div class="hidden">
    <a class="btn owl-btn next"><span class="fa fa-angle-right"></span></a>
    <a class="btn owl-btn prev"><span class="fa fa-angle-left"></span></a>
</div>
<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owl-carousel/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
@stop
