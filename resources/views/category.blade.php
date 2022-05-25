@extends('layout')
@section('content')
<?php

use Illuminate\Support\Facades\Session;

$m1 = Session::get('m1');
$m2 = Session::get('m2');
$m3 = Session::get('m3');
$m4 = Session::get('m4');
$m5 = Session::get('m5');
?>
<section class="search bg-lavender p-5">
    <div>
        <div class="d-flex justify-content-start align-items-center ml-3 mt-2 mb-4">
            <i class="fa fa-home" style="color: #6762a6"></i>
            <a class="ms-2" href="" style="font-weight: 300">/Danh mục /Sản phẩm</a>
        </div>
        <div class="row">
            <div class="col-12 col-xl-2 mb-4">
                <div class="" style="background: #fff">
                    <div class="danhmuc" style="
                  background: #6762a6;
                  color: white;
                  margin: 0;
                  padding: 0.5rem;
                ">
                        <p style="margin: 0; padding: 4px 8px">Danh mục</p>
                    </div>
                    @foreach($category_product as $key => $cate)

                    <div class="danhmuc" style="
                  background: #fff;
                  color: black;
                  margin: 0;
                  padding: 0.5rem;
                  font-weight: 200;
                ">
                        <p style="margin: 0; padding: 4px 8px"><a href="{{URL::to('/category/'.$cate->category_id)}}">{{$cate->category_name}}</a></p>
                    </div>
                    @endforeach

                </div>
                <div class="sidebar-widget price-range-widget">
                <h4>Price Filter</h4>
                <form action="{{URL::to('/price-filter')}}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    <div class="checkbox-item-wrap">
                        <div class="checkbox-item d-flex justify-content-between align-items-center">
                            <div class="checkbox style2">
                                <input type="radio" id="m1" name="price" value="m1">
                                <label for="m1">0đ - 100.000đ</label><span>({{$m1}})</span><br>
                                <input type="radio" id="m2" name="price" value="m2">
                                <label for="m2">100.000đ - 150.000đ</label><span>({{$m2}})</span><br>
                                <input type="radio" id="m3" name="price" value="m3">
                                <label for="m3">150.000đ - 200.000đ</label><span>({{$m3}})</span><br>
                                <input type="radio" id="m4" name="price" value="m4">
                                <label for="m4">200.000đ - 500.000đ</label><span>({{$m4}})</span><br>
                                <input type="radio" id="m5" name="price" value="m5">
                                <label for="m5">&gt; 500.000đ</label><span>({{$m5}})</span><br>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-lg btn btn-primary" style="float: right;">Áp dụng</button>
                </form>
            </div>
            </div>
            
            <div class="col-12 col-xl-10">
                <div class="">
                    <div class="paira-collection-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 paira-gap-4 padding-clear" style="margin-left: 30px;">
                                <h1 class="margin-clear text-left text-uppercase">{{$category[0]->category_name}}</h1>
                            </div>
                        </div>
                        <div class="row paira-grid-view">
                            @foreach($product as $key => $pro)
                            <div class=" col-md-3 col-sm-3 col-xs-12 padding-clear">
                                <!--=================== Product ===================-->
                                <div class="paira-product product" style="margin: 30px;">
                                    <a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11">
                                        <img src="{{$pro->product_thumbnail}}" alt="Free demo product name 11" class="paira-product-image img-responsive">
                                    </a>

                                    <div class="product-hover">
                                        <a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="btn-lg btn btn-primary margin-top-60 font-size-16">Chi tiết</a>
                                    </div>
                                    <div class="p-3 product-title-price my-border-top">
                                        <h4 class="margin-top-0"><a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="paira-product-title">{{$pro->product_name}}</a></h4>

                                        <div class="text-center font-size-16"><span class="money"><?php echo $pro->product_price / 1000 ?>.000 VNĐ</span></div>
                                        <div class="text-center font-size-16"><span class="money">Đã bán: <?php echo $pro->product_sold ?></span></div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection