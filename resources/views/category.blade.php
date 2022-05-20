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
                    <div class="productList row"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
echo $product; 
?>
@endsection