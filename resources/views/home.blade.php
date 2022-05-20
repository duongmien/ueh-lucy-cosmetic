<?php

use Illuminate\Support\Facades\DB;
?>
@extends('layout')
@section('content')
<section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/banner1.png " class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="./assets/images/banner2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="./assets/images/banner3.png" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
@foreach($category_product as $key => $cate)
<section class="makeup">
    <h3 class="text-center"><a href="{{URL::to('/category/'.$cate->category_id)}}">{{$cate->category_name}}</a></h3>
    <div class="container">
        <div class="makeupList row"></div>
    </div>
</section>
<?php
$product = DB::table('tbl_product')->where('category_id', $cate->category_id)->limit(4)->get();
?>
<section class="top-seller paira-gap-4">
    <div class="container">
        <div class="row">
            <div class="product-widget">
                @foreach($product as $key => $pro)
                <div class="col-md-3 col-sm-3 col-xs-12 padding-clear">
                    <!--=================== Product ===================-->
                    <div class="paira-product product">
                        <a href="{{URL::to('/product-detail/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11">
                            <img src="{{$pro->product_thumbnail}}" alt="Free demo product name 11" class="paira-product-image img-responsive">
                        </a>

                        <div class="product-hover">
                            <a href="{{URL::to('/product-detail/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="btn-lg btn btn-primary margin-top-60 font-size-16">Chi tiết</a>
                        </div>
                        <div class="margin-left-10 margin-right-10 product-title-price">
                            <h4 class="margin-top-10"><a href="{{URL::to('/product-detail/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="paira-product-title">{{$pro->product_name}}</a></h4>

                            <div class="text-center padding-bottom-10 font-size-16"><span class="money">{{$pro->product_price}} đ</span></div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endforeach




@endsection