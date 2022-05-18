@extends('layout')
@section('content')
<section>
      <div class="m-5">
        <div class="overflow-auto">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="checkout"></tbody>
          </table>
        </div>

        <div class="coupon w-100">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-6 row justify-content-center my-3">
              <div class="col-7">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nhập mã giảm giá"
                  id="couponInput"
                />
              </div>
              <div class="col-5 row justify-content-center align-items-center">
                <button
                  class="btn btn-dark d-block my-auto"
                  id="couponBtn"
                  type="button"
                  onclick="handleCoupon()"
                >
                  Áp dụng
                </button>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <h3 class="text-center" style="font-weight: bold">Thanh toán</h3>
              <div class="d-flex justify-content-between">
                <p>Tổng thu</p>
                <p class="total-price"></p>
              </div>
              <div class="d-flex justify-content-between">
                <p>Giảm giá</p>
                <p class="coupon-price"></p>
              </div>
              <div class="d-flex justify-content-between">
                <p>Phí vận chuyển</p>
                <p class="shipping-price"></p>
              </div>
              <div
                class="p-2 d-flex justify-content-between align-items-center fw-bold"
                style="background: #c9c3e6"
              >
                <p class="m-0">Tổng cộng</p>
                <p class="total-price-after-coupon m-0"></p>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <button
                  class="btn btn-dark mt-2 text-center"
                  id="checkoutBtn"
                  type="button"
                  onclick="handleCheckout()"
                >
                  Thanh toán
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection