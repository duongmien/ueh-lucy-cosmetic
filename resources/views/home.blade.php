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


@endsection