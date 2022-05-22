@extends('layout')
@section('content')
<section class="search">
    <div class="m-5">
        <div class="d-flex justify-content-start align-items-center ml-3 mt-2 mb-4">
            <i class="fa fa-home" style="color: #6762a6"></i>
            <a class="" href="" style="font-weight: 300">/Danh mục/Sản phẩm</a>
        </div>
        <div class="row">
            <div class="col-12 col-xl-3 mb-4">
                <div class="">
                    <div class="danhmuc" style="
                  background: #6762a6;
                  color: white;
                  margin: 0;
                  padding: 0.5rem;
                ">
                        <p style="margin: 0">Danh mục</p>
                    </div>
                    @foreach($category_product as $key => $cate)

                    <div class="danhmuc" style="
                  background: #edecfa;
                  color: black;
                  margin: 0;
                  padding: 0.5rem;
                  font-weight: 200;
                ">
                        <p style="margin: 0"><a href="{{URL::to('/category/'.$cate->category_id)}}">{{$cate->category_name}}</a></p>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-12 col-xl-9">
                <div class="">
                    <div class="paira-collection-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 paira-gap-4 padding-clear">
                                <h1 class="margin-clear text-left text-uppercase">{{$category[0]->category_name}}</h1>
                            </div>
                        </div>
                        <div class="row paira-grid-view">
                            @foreach($product as $key => $pro)
                            <div class="col-md-3 col-sm-3 col-xs-12 padding-clear">
                                <!--=================== Product ===================-->
                                <div class="paira-product product">
                                    <a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11">
                                        <img src="{{$pro->product_thumbnail}}" alt="Free demo product name 11" class="paira-product-image img-responsive">
                                    </a>

                                    <div class="product-hover">
                                        <a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="btn-lg btn btn-primary margin-top-60 font-size-16">Chi tiết</a>
                                    </div>
                                    <div class="margin-left-10 margin-right-10 product-title-price">
                                        <h4 class="margin-top-10"><a href="{{URL::to('/product/'.$pro->product_id)}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="paira-product-title">{{$pro->product_name}}</a></h4>

                                        <div class="text-center padding-bottom-10 font-size-16"><span class="money">{{$pro->product_price}} đ</span></div>

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