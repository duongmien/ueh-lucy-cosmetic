@extends('layout')
@section('content')
<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Giỏ hàng</h2>
                        <h3 style="color: #ffffff">Satisfy your cravings</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wishlist-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-20">
                    <div class="wishlist-table ">
                        <table class="table table-bordered">
                            <thead>
                                <tr align="center">
                                    <th scope="col">Product</th >
                                    <th scope="col">Quantity</th >
                                    <th scope="col">Total Price</th >
                                    <th scope="col">Remove</th>
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
                                            <img src="{{$cart['product_image']}}" style="float:left;" height="100px" width="100px"  alt="Image">
                                            <div class="wh-item-info">
                                                <a href="{{URL::to('/product/'.$cart['product_id'])}}">{{$cart['product_name']}}</a>
                                                <span style="display: block;"><?php echo $cart['product_price']/1000?>.000 VND</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="wh_qty">
                                            <div class="product-quantity style2">
                                                <div class="qtySelector">
                                                    <input type="hidden" class="product_id" value="{{$cart['product_id']}}">
                                                    <span class="fa fa-minus-circle decreaseQty changeQty"></span>
                                                    <input type="text" class="qtyValue qtyinput" style="width: 30px;border: 0px solid;text-align: center;" name="cart_quantity" value="{{$cart['product_qty']}}" />
                                                    <span class="fa fa-plus-circle increaseQty changeQty"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="wh-tem-price subtotal">
                                            <?php 
                                                $subtotal = $cart['product_price'] * $cart['product_qty'];
                                                echo number_format($subtotal).' '.'VND';
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <button type="button" class="deleteItem" style="border: 0px solid;" ><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="checkout-details">
                        <div class="row mt-20">
                            
                            <div class="col-md-7 text-md-end">
                                <a href="{{URL::to('/')}}" class="btn style1">Continue Shopping<i class="flaticon-right-arrow-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12"id="totalCall">
                    <div class="checkout-details smt-30 totalLoad" >
                        <div class="content-box-title">
                            <h4 class="mb-20">Total Bill</h4>
                        </div>
                        <div class="bill-details">
                            <div class="total-wrap">
                                <h5>Total Amount</h5>
                                <span class="totalPrice">{{number_format($total).' '.'VND'}}</span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <a href="{{URL::to('checkout')}}" class="btn style1 w-100 d-block">Proceed To Checkout<i class="lar la-check-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection