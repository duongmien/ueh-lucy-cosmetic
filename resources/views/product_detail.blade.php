@extends('layout')
@section('content')
<section>
    <div class="container">
        <div class="d-flex justify-content-start align-items-center ml-3 mt-3 mb-2">
            <i class="fa fa-home" style="color: #6762a6"></i>
            <a class="" href="" style="font-weight: 300">/Danh mục/Sản phẩm</a>
        </div>
        <div class="row mb-2">
            <div class="col-12 col-xl-3">
                <img src="https://product.hstatic.net/1000006063/product/366f5bc3954a1c3c249f24aa1a9477d2_cbb62672897d40e8aed0fa0ee4547c12_1024x1024.jpeg" id="productImage" alt="" width="100%" />
            </div>
            <div class="col-12 col-xl-6">
                <div id="productDetail"></div>
            </div>
            <div class="col-12 text-center col-xl-3">
                <img src="../assets/images/info.png" width="316" height="319" alt="" />
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