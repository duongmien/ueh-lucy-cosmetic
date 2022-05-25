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
<!-- <img width="207" height="284" src="https://g2h4v2c9.stackpathcdn.com/themes/cosmecos-new/wp-content/uploads/2021/02/home2-bg-11.png" class="attachment-full size-full" alt="" loading="lazy"> -->

@foreach($category_product as $key => $cate)
<div class="test">
    <section class="makeup">
        <h3 style="color:violet" class="text-center"><a href="{{URL::to('/category/'.$cate->category_id)}}">{{$cate->category_name}}</a></h3>
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
                        <div class="paira-product product" style="margin: 30px;">
                            <a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11">
                                <img src="{{$pro->product_thumbnail}}" alt="Free demo product name 11" class="paira-product-image img-responsive">
                            </a>

                            <div class="product-hover">
                                <a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="btn-lg btn btn-primary margin-top-60 font-size-16">Chi tiết</a>
                            </div>
                            <div class="margin-left-10 margin-right-10 product-title-price">
                                <h4 class="margin-top-10"><a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="paira-product-title">{{$pro->product_name}}</a></h4>

                                <div class="text-center padding-bottom-10 font-size-16"><span class="money"><?php echo $pro->product_price / 1000 ?>.000 VNĐ</span></div>
                                <div class="text-center font-size-16"><span class="money">Đã bán: <?php echo $pro->product_sold ?></span></div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endforeach

<!-- <img width="151" height="384" src="https://g2h4v2c9.stackpathcdn.com/themes/cosmecos-new/wp-content/uploads/2021/01/home2-bg-7-1-2.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://g2h4v2c9.stackpathcdn.com/themes/cosmecos-new/wp-content/uploads/2021/01/home2-bg-7-1-2.png 151w, https://g2h4v2c9.stackpathcdn.com/themes/cosmecos-new/wp-content/uploads/2021/01/home2-bg-7-1-2-118x300.png 118w" sizes="(max-width: 151px) 100vw, 151px">
<img width="214" height="274" src="https://g2h4v2c9.stackpathcdn.com/themes/cosmecos-new/wp-content/uploads/2021/01/home2-bg-7-2-2.png" class="attachment-full size-full" alt="" loading="lazy" style="margin-right: 0px"> -->


@endsection