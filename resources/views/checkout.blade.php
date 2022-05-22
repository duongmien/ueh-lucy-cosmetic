@extends('layout')
@section('content')

<div class="breadcrumb-wrap bg-f br-1">
  <div class="overlay bg-black op-9"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb-title">
          <h2>Checkout</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="checkout-wrap ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-20">
        <div class="wishlist-table ">
          <table class="table table-bordered">
            <thead>
              <tr align="center">
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
              </tr>
            </thead>
            <tbody>
              @php
              $total = 0;
              @endphp
              @if (is_array(Session::get('cart')) || is_object(Session::get('cart')))
              @foreach(Session::get('cart') as $key => $cart)
              @php
              $subtotal = $cart['product_price'] * $cart['product_qty'];
              $total += $subtotal;
              @endphp
              <tr align="center" class="cartpage">
                <td align="justify">
                  <div class="wh_item">
                    <img src="{{$cart['product_image']}}" style="float:left;" height="100px" width="100px" alt="Image">
                    <div class="wh-item-info">
                      <a href="{{URL::to('/product/'.$cart['product_id'])}}">{{$cart['product_name']}}</a>
                      <span style="display: block;"><?php echo $cart['product_price'] / 1000 ?>.000 VND</span>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="wh_qty">
                    <div class="product-quantity style2">
                      <div class="qtySelector">
                        <input type="hidden" class="product_id" value="{{$cart['product_id']}}">
                        <input type="text" class="qtyValue qtyinput" style="width: 30px;border: 0px solid;text-align: center;" name="cart_quantity" value="{{$cart['product_qty']}}" />
                       
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="wh-tem-price subtotal">
                    <?php
                    $subtotal = $cart['product_price'] * $cart['product_qty'];
                    echo number_format($subtotal) . ' ' . 'VND';
                    ?>
                  </p>
                </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="checkout-form bg-wild-sand">
          <form role="form" action="{{URL::to('/save-checkout')}}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_id" value="
            <?php

            use Illuminate\Support\Facades\Session;

            $user_id = Session::get('user_id');
            if ($user_id) {
              echo $user_id;
            }
            ?>">

            <h2 class="mb-0">Select Payment Method</h2>
            <div class="select-method">
              <div>
                <input type="radio" id="test1" value="Cash On Delivery" checked name="payment_option">
                <label for="test1">Cash On Delivery</label>
              </div>
              <div>
                <input type="radio" id="test2" value="Card" name="payment_option">
                <label for="test2">Card</label>
              </div>
              <div>
                <input type="radio" id="test3" value="Momo" name="payment_option">
                <label for="test3">Momo</label>
              </div>
            </div>
            <div class="billing-details">
              <h4 class="mb-20">Billing Details</h4>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="shipping_name" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="number" name="shipping_phone" placeholder="Your Phone" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" name="shipping_email" value="" placeholder="Your Email Address">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="shipping_address" placeholder="Your Address" required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input placeholder="Write notes about your order" value="" name="shipping_note" id="order_msg" cols="30" rows="10"></input>
                  </div>
                </div>
              </div>
              <div class="row checkout-btn">
                <div class="col-md-6 smb-20">
                  <a href="{{URL::to('/')}}" class="btn style1">Continue Shopping<i class="flaticon-right-arrow-2"></i></a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-lg-end">
                  <h4 class="total-amt sm-none">Total: <span>{{number_format($total).' '.'VND'}}</span></h4>
                  <input type="hidden" name="total" value="{{$total}}"></input>
                  <input type="submit" name="send_order" class="inph inhe" value="Place Order"></input>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection