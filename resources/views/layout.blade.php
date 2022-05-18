<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lucy Cosmetic</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playball" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <header>
    <div class="header-top">
      <div class="row m-0 px-5 py-3 align-items-center">
        <div class="col-12 col-xl-2 my-2 text-center">
          <div class="logo">
            <div style="width: 150px; height: 100px; margin: 0 auto">
              <a href="/" style="display: inline-block; margin: 0 auto">
                <img src="./assets/images/logo.png" alt="" style="width: 150px; height: 100px" />
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 my-2 text-center">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" id="searchInput" />
            <div class="input-group-btn">
              <button class="btn" id="searchBtn" type="button" onclick="handleSearch()">
                <i class="fa-solid fa-magnifying-glass" style="color: white"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-2 my-2 text-center">
          <a href="" class="text-dark">
            <i>Đăng nhập/Đăng ký</i>
          </a>
        </div>
        <div class="col-12 col-md-6 col-xl-2 my-2 text-center row align-items-center">
          <div class="col-6">
            <img src="./assets/images/Rectangle 4.png" alt="" width="60" height="60" />
          </div>
          <div class="col-6" onclick="window.location.replace('/pages/checkout.html')">
            <p style="text-decoration: none; margin: 0; cursor: pointer">
              0đ
            </p>
            <p style="text-decoration: none; margin: 0; cursor: pointer">
              Giỏ hàng
            </p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-2 my-2 text-center row align-items-center">
          <div class="col-6">
            <img src="./assets/images/Rectangle 5.png" alt="" width="60" height="60" />
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
      <img src="./assets/images/logotr.png" class="rounded mx-auto d-block" style="width: 200px; height: 150px" alt="..." />
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
  <script src="/assets/js/index.js" type="module"></script>
</body>

</html>