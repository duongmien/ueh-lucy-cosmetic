@extends('layout')
@section('content')
<section class="register-content margin-top-60 paira-gap-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center paira-gap-4">
                <h1 class="margin-clear text-uppercase">Đăng ký tài khoản</h1>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="https://bulb-free-responsive-theme.myshopify.com/account" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />

                    <label>Số điện thoại</label>
                    <input type="text" value="" name="customer[phone_number]" id="phone_number" class="form-control margin-bottom-10" />
                    <label>Họ và tên</label>
                    <input type="text" value="" name="customer[user_name]" id="user_name" class="form-control margin-bottom-10" />
                    <label>Password</label>
                    <input type="password" value="" name="customer[password]" id="password" class="form-control margin-bottom-10" />
                    <label>Địa chỉ</label>
                    <input type="text" value="" name="customer[address]" id="address" class="form-control margin-bottom-10" />
                    <button type="submit" class="btn btn-primary btn-lg pull-left">Đăng ký</button>
                    <a href="{{URL::to('/')}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/" class="btn btn-default btn-lg pull-right">Trở lại shop</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection