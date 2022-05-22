@extends('layout')
@section('content')
<section class="single-product paira-gap-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row paira-product">
                    <div class="col-md-7 col-sm-6 col-xs-12 margin-top-60">
                        <div class="paira-product single-variants-product">
                            <div class="single-product-image-list">
                                <div id="product-carousel" class="carousel slide paira-single-product-slider" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img src="{{$product[0]->product_thumbnail}}" alt="" class="img-responsive center-block" />
                                        </div>

                                        <div class="item ">
                                            <img src="{{$product[0]->product_thumbnail}}" alt="" class="img-responsive center-block" />
                                        </div>

                                        <div class="item ">
                                            <img src="{{$product[0]->product_thumbnail}}" alt="" class="img-responsive center-block" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 margin-top-60 padding-left-xs-15">
                        <h2 class="margin-clear paira-product-title margin-bottom-10 text-uppercase">{{$product[0]->product_name}}</h2>
                        <p class="margin-bottom-20 paira-price-preview">
                            <span class="paira-default-price"><span class="money">{{$product[0]->product_price}}</span></span>
                        </p>
                        <div class="full-width">
                            <strong class="text-uppercase">Quantity</strong>
                            <div class="input-group paira-quantity-group product-quantity-group margin-top-10">
                                <div class="input-group-addon" data-direction="down"><i class="fa fa-minus"></i></div>
                                <input type="text" value="1" class="form-control paira-single-quantity text-center" placeholder="1">
                                <div class="input-group-addon" data-direction="up"><i class="fa fa-plus"></i></div>
                            </div>
                        </div>
                        <div class="single-product-buttons">
                            <a href="#" data-item-quantity="1" data-varient-id="25021668803" data-id_product="{{$product[0]->product_id}}" class="add-to-card btn btn-primary full-width btn-block btn-lg paira-add-to-cart margin-top-30 margin-right-10">
                                <i class="fa fa-shopping-cart"></i>
                                Thêm vào giỏ hàng
                            </a>
                            <form>
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" class="cart_product_id_{{$product[0]->product_id}}" value="{{$product[0]->product_id}}">
                                <input type="hidden" class="cart_product_name_{{$product[0]->product_id}}" value="{{$product[0]->product_name}}">
                                <input type="hidden" class="cart_product_image_{{$product[0]->product_id}}" value="{{$product[0]->product_thumbnail}}">
                                <input type="hidden" class="cart_product_price_{{$product[0]->product_id}}" value="{{$product[0]->product_price}}">
                                <input type="hidden" class="cart_product_qty_{{$product[0]->product_id}}" value="1">
                                <button type="button" class="btn btn-primary full-width btn-block btn-lg paira-add-to-cart margin-top-30 margin-right-10 add-to-card" data-id_product="{{$product[0]->product_id}}">
                                    <span><i class="flaticon-bag"></i>Add To Cart</span>
                                </button>
                            </form>

                        </div>
                        <div class="">
                            <img src="{{asset('assets/images/info.png')}}" width="316" height="319" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                    Mô tả
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                    Thông tin sản phẩm
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                    Đánh giá
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="mota"></div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="thongtinchitiet"></div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="danhgia"></div>
            </div>
        </div>
    </div>
</section>

@endsection