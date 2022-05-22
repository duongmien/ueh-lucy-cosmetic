<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lucy Cosmetic</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playball" />

  <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/png" />

  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <!--=================== Bootstrap Core CSS ===================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css-v=102160851808464328901537612087.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/paira.css-v=73142870747334093771537612090.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/paira-typography.css-v=121268532381626579421537612129.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/paira-responsive.css-v=60787432624619753551537612090.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css-v=63684808038327842911537612088.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/css-family=Lato-300,400.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/css-family=Roboto-700.css')}}" />

</head>

<body>
  <header>
    <div class="header-top">
      <div class="row m-0 px-5 py-3 align-items-center">
        <div class="col-12 col-xl-2 my-1 text-center">
          <div class="logo">
            <div style="width: 150px; height: 100px; margin: 0 auto">
              <a href="{{URL::to('/')}}" style="display: inline-block; margin: 0 auto">
                <img src="{{asset('assets/images/logo.png')}}" alt="" style="width: 150px; height: 100px" />
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-3 my-2 text-center">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" id="searchInput" />
            <div class="input-group-btn">
              <button class="btn" id="searchBtn" type="button" onclick="handleSearch()">
                <i class="fa-solid fa-magnifying-glass" style="color: white"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-1 my-1 text-center">
          <a href="{{URL::to('login')}}" class="text-dark">
            <i>Đăng nhập</i>
          </a>
          <a href="{{URL::to('register')}}" class="text-dark">
            <i>Đăng ký</i>
          </a>
        </div>
        <div class="col-12 col-md-3 col-xl-1 my-1 text-center row align-items-center">
          <div class="col-6">
            <img src="{{asset('assets/images/Rectangle 4.png')}}" alt="" width="60" height="60" />
          </div>
          <div class="col-6" onclick="window.location.replace('/cart')">
            <p style="text-decoration: none; margin: 0; cursor: pointer">
              0đ
            </p>
            <p style="text-decoration: none; margin: 0; cursor: pointer">
              Giỏ hàng
            </p>
          </div>
        </div>
        <div class="col-12 col-md-3 col-xl-1 my-1 text-center row align-items-center">
          <div class="col-6">
            <img src="{{asset('assets/images/Rectangle 5.png')}}" alt="" width="60" height="60" />
          </div>
          <div class="col-6">
            <p style="text-decoration: none; margin: 0; cursor: pointer">
              Hotline
            </p>
            <p style="text-decoration: none; margin: 0; cursor: pointer">
              19005564
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="m-0 p-2 text-white row justify-content-around align-items-center">
        <div class="col-12 col-md-3 col-xl my-1">
          <a href="{{URL::to('/')}}" class="text-white d-block text-center">
            <i class="fa-solid fa-house"></i>
          </a>
        </div>
        @foreach($category_product as $key => $cate)

        <div class="col-12 col-md-3 col-xl my-1">
          <a href="{{URL::to('/category/'.$cate->category_id)}}" class="text-white d-block text-center" style="font-size: larger">{{$cate->category_name}}</a>
        </div>
        @endforeach


      </div>
    </div>
  </header>
  @yield('content')
  <footer class="text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <img src="{{asset('assets/images/logotr.png')}}" class="rounded mx-auto d-block" style="width: 200px; height: 150px" alt="..." />
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lucy Cosmetics tự hào là một trong những chuỗi cửa hàng mỹ phẩm lớn
          và đáng tin cậy nhất tại Sài Gòn, nơi có thể thỏa mãn niềm đam mê
          trong cuộc chơi phấn son của hàng triệu tín đồ yêu shopping từ Nam
          ra Bắc. Được ưu ái với tên gọi “Thiên Đường Mỹ Phẩm Triệu Like”,
          Lucy luôn được xem là mái nhà chung của hàng nghìn mặt hàng mỹ phẩm
          thuộc rất nhiều thương hiệu lớn nhỏ, hội tụ từ khắp các quốc gia
          trên thế giới. Lucy luôn sẵn sàng đáp ứng mọi nhu cầu làm đẹp cho
          phái đẹp lẫn phái mạnh mà không cần phải lo về giá và chất lượng sản
          phẩm.
        </p>
      </section>
      <!-- Section: Text -->
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    const viewDetail = (id) => {
      window.localStorage.setItem("productId", id);
      window.location.replace("/pages/detail.html");
    };

    const handleSearch = () => {
      const search = document.querySelector("#searchInput").value;

      window.localStorage.setItem("searchValue", search);
      window.location.replace("/pages/search.html");
    };
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.add-to-card').click(function() {
        var id = $(this).data('id_product');
        var cart_product_id = $('.cart_product_id_' + id).val();
        var cart_product_name = $('.cart_product_name_' + id).val();
        var cart_product_image = $('.cart_product_image_' + id).val();
        var cart_product_price = $('.cart_product_price_' + id).val();
        var cart_product_qty = $('.cart_product_qty_' + id).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url: '{{url("/add-cart-ajax")}}',
          method: 'POST',
          data: {
            cart_product_id: cart_product_id,
            _token: _token,
            cart_product_name: cart_product_name,
            cart_product_image: cart_product_image,
            cart_product_price: cart_product_price,
            cart_product_qty: cart_product_qty
          },
          success: function(data) {
            swal({
                title: "The product has been added to cart",
                text: "You can continue shopping or go to the shopping cart",
                icon: "success",
                buttons: ["Continue", "Go to Cart"],
                dangerMode: false,
              })
              .then((willDelete) => {
                if (willDelete) {
                  window.location.href = "{{url('/show-cart')}}";
                }
              });
            $('#totalQty').load(location.href + ' .totalQtyLoad');
          },
          error: (error) => {
            console.log(JSON.stringify(error));
          }
        })

      })
      $('.buy-now').click(function() {
        var id = $(this).data('id_product');
        var cart_product_id = $('.cart_product_id_' + id).val();
        var cart_product_name = $('.cart_product_name_' + id).val();
        var cart_product_image = $('.cart_product_image_' + id).val();
        var cart_product_price = $('.cart_product_price_' + id).val();
        var cart_product_qty = $('.cart_product_qty_' + id).val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url: '{{url("/add-cart-ajax-2")}}',
          method: 'POST',
          data: {
            cart_product_id: cart_product_id,
            _token: _token,
            cart_product_name: cart_product_name,
            cart_product_image: cart_product_image,
            cart_product_price: cart_product_price,
            cart_product_qty: cart_product_qty
          },
          success: function(data) {
            window.location.href = "{{url('/checkout')}}";
          },
          error: (error) => {
            console.log(JSON.stringify(error));
          }
        })

      })
      $('.changeQty').click(function(e) {
        e.preventDefault();
        var thisClick = $(this);
        var quantity = $(this).closest(".cartpage").find(".qtyinput").val();
        var product_id = $(this).closest(".cartpage").find(".product_id").val();
        if (quantity == 0) {
          $.ajax({
            url: '{{url("/delete-cart")}}',
            type: 'DELETE',
            method: 'get',
            data: {
              product_id: product_id,
              _token: '{{csrf_token()}}'
            },
            success: function(response) {
              thisClick.closest(".cartpage").remove();
              $('#totalCall').load(location.href + ' .totalLoad');
              $('#totalQty').load(location.href + ' .totalQtyLoad');
              // console.log("done");
            },
            error: (error) => {
              console.log(JSON.stringify(error));
            }
          })
        } else {
          $.ajax({
            url: '{{url("/update-cart")}}',
            method: 'post',
            data: {
              product_id: product_id,
              quantity: quantity,
              _token: '{{csrf_token()}}'
            },
            success: function(response) {
              // window.location.reload();   
              thisClick.closest(".cartpage").find('.subtotal').text(response.subtotal);
              $('#totalCall').load(location.href + ' .totalLoad');
              $('#totalQty').load(location.href + ' .totalQtyLoad');
              // console.log("done");
            },
            error: (error) => {
              console.log(JSON.stringify(error));
            }
          })
        }
      })
      $('.deleteItem').click(function(e) {
        e.preventDefault();
        var thisDelete = $(this);
        var product_id = $(this).closest(".cartpage").find(".product_id").val();
        $.ajax({
          url: '{{url("/delete-cart")}}',
          type: 'DELETE',
          method: 'get',
          data: {
            product_id: product_id,
            _token: '{{csrf_token()}}'
          },
          success: function(response) {
            thisDelete.closest(".cartpage").remove();
            $('#totalCall').load(location.href + ' .totalLoad');
            $('#totalQty').load(location.href + ' .totalQtyLoad');
            // console.log("done");
          },
          error: (error) => {
            console.log(JSON.stringify(error));
          }
        })
      })


    })
  </script>
</body>

</html>