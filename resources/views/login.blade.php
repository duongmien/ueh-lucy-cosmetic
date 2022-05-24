@extends('layout')
@section('content')

<section class="login-content margin-top-60 paira-gap-2">
    <div class="container">
        <div class="row">
            <div id="login">
                <div class="col-md-12 paira-gap-4">
                    <h1 class="margin-clear text-uppercase">Đăng nhập</h1>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{URL::to('/check-login')}}" method="post" id="customer_login" accept-charset="UTF-8">
                                @csrf
                                <input type="hidden" name="token" value="{{ csrf_token() }}">

                                <label>Số điện thoại</label>
                                <input type="text" value="" name="user_phone" class="form-control margin-bottom-10" id="user_phone" />
                                <label>Mật khẩu</label>
                                <input type="password" value="" name="password" class="form-control margin-bottom-10" id="password" size="16" />
                                <button type="submit" class="btn btn-default pull-left">Đăng nhập</button>
                                <a href="#" class="pull-right" data-toggle="modal" data-target="#paira-forget-password">
                                    <h5>Quên mật khẩu?</h5>
                                </a>

                            </form>
                        </div>
                    </div>
                </div>
                <div id="login" class="col-md-7 text-center">
                    <h4 class="margin-bottom-20 margin-top-40">Khách hàng mới?</h4>
                    <a href="{{URL::to('register')}}" tppabs="https://bulb-free-responsive-theme.myshopify.com/account/register" class="btn btn-success btn-lg">Đăng ký tài khoản</a>
                </div>
            </div>



        </div>
    </div>
</section>
@endsection