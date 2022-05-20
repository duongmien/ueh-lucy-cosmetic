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
@endforeach

<section class="top-seller paira-gap-4">
    <div class="container">
        <div class="row">
            <div class="product-widget">
                <div class="col-md-3 col-sm-3 col-xs-12 padding-clear">
                    <!--=================== Product ===================-->
                    <div class="paira-product product">
                        <a href="free-demo-product-name-11.htm" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11">
                            <img src="themetidy-Bulb-Responsive-eCommerce-Electric-Shop-Free-Shopify-Theme-product-image-3_bbd029e5-3a0f-4b34-b228-d4d93f496322_large.jpg-v=1469964863.jpg" tppabs="https://cdn.shopify.com/s/files/1/1412/7610/products/themetidy-Bulb-Responsive-eCommerce-Electric-Shop-Free-Shopify-Theme-product-image-3_bbd029e5-3a0f-4b34-b228-d4d93f496322_large.jpg?v=1469964863" alt="Free demo product name 11" class="paira-product-image img-responsive">
                        </a>

                        <div class="product-hover">
                            <a href="free-demo-product-name-11.htm" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="btn-lg btn btn-primary margin-top-60 font-size-16">Details</a>
                        </div>
                        <div class="margin-left-10 margin-right-10 product-title-price">
                            <h4 class="margin-top-10"><a href="free-demo-product-name-11.htm" tppabs="https://bulb-free-responsive-theme.myshopify.com/products/free-demo-product-name-11" class="paira-product-title">Free demo product</a></h4>

                            <div class="text-center padding-bottom-10 font-size-16"><span class="money">$450.00</span></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection