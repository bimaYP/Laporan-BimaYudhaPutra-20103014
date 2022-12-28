@extends('layouts.app')

@section('content')

<div id="carousel" class="carousel slide " data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="{{ asset('asset/image/arwana.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="h1 text-success"><b>Dream Fish</b> eCommerce</h1>
                <h3 class="h2">Temukan berbagai hewan air kesukaan anda di Dream Fish</h3>
                <p>Dream Fish adalah eCommerce tempat Anda dapat membeli ikan dan berbagai macam hewan air lainnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="{{ asset('asset/image/Kooi.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Dream Fish</h1>
                <h3 class="h2">Ikan Hias</h3>
                <p>
                  Ikan hias adalah jenis ikan baik yang berhabitat di air tawar maupun 
                  di laut yang dipelihara bukan untuk konsumsi melainkan untuk memperindah taman/ruang tamu
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="{{ asset('asset/image/cupang.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Dream Fish</h1>
                <h3 class="h2">Mas Koki</h3>
                <p>Ikan Mas Koki adalah ikan air tawar dari familia Cyprinidae dan ordo Cypriniformes. 
                  Ikan ini adalah salah satu ikan yang pertama kali berhasil didomestikasi, dipelihara, dan dibudidayakan manusia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#carousel" role="button"
      data-bs-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#tcarousel" role="button"
      data-bs-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  <!-- Carousel end -->

  <!-- Start Best Seller -->
  <section class="container py-5">
    <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Ikan paling laris bulan ini</h1>
       
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 p-5 mt-3">
        <a href="#"><img src="{{ asset('asset/image/arwana.jpg')}}" class="rounded-circle img-fluid border" /></a>
        <h5 class="text-center mt-3 mb-3">Arwana Super Red Chili</h5>
        <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
        <a href="#"><img src="{{ asset('asset/image/louhan.jpg')}}" class="rounded-circle img-fluid border" /></a>
        <h2 class="h5 text-center mt-3 mb-3">Louhan Red Dragon</h2>
        <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
        <a href="#"><img src="{{ asset('asset/image/gupy.jpg')}}" class="rounded-circle img-fluid border" /></a>
        <h2 class="h5 text-center mt-3 mb-3">Gupy Balck Yellow</h2>
        <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
      </div>
    </div>
  </section>
  <!-- End Best Seller -->

  <!--Start Feature Product-->
  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Ikan Unggulan</h1>
          
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="shop.html">
              <img src="{{ asset('asset/image/udang.jpg')}}" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li class="text-muted text-right">Rp.500.000</li>
              </ul>
              <a href="shop.html" class="h2 text-decoration-none text-dark">Udang red bee</a>
              <p class="card-text">Udang red bee adalah udang jenis air tawar yang cantik dan populer serta jadi udang hias favorit dalam hobi aquascape.</p>
              <p class="text-muted">Reviews (200)</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="shop.html">
              <img src="{{ asset('asset/image/arwana.jpg')}}" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li class="text-muted text-right">Rp. 1.500.000</li>
              </ul>
              <a href="discus.jpg" class="h2 text-decoration-none text-dark">Arwana Super Red</a>
              <p class="card-text">Arwana Super Red adalah salah satu spesies ikan air tawar dari Asia Tenggara. 
                Ikan ini memiliki badan yang panjang, sirip dubur terletak jauh di belakang badan.</p>
              <p class="text-muted">Reviews (250)</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
          <div class="card h-100">
            <a href="shop.html">
              <img src="{{ asset('asset/image/discus.jpg')}}" class="card-img-top" alt="..." />
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li class="text-muted text-right">Rp.200.000</li>
              </ul>
              <a href="shop.html" class="h2 text-decoration-none text-dark">Ikan Discus</a>
              <p class="card-text">discus, adalah genus cichlids asli lembah sungai Amazon di Amerika Selatan. Karena bentuk, perilaku, dan warna serta polanya yang khas, 
                discus populer sebagai ikan akuarium air tawar, dan budidayanya di beberapa negara di Asia merupakan industri besar.</p>
              <p class="text-muted">Reviews (1000)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Product -->

  <!-- Start Footer -->
  <footer class="bg-dark" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pt-5">
          <h2 class="h2 border-bottom pb-3 border-light logo" style="color: white;">Dream Stationary</h2>
          <ul class="list-unstyled text-light footer-link-list">
            <li>
              <i class="fa fa-map-marker fa-fw"></i>
              <font style="color: blue;"> Jl. Menuju Kemenangan No.99</font>
              
            </li>
            <li>
              <i class="fa fa-phone fa-fw"></i>
              <a class="text-decoration-none" href="tel:010-020-0340">(021) 326 917</a>
            </li>
            <li>
              <i class="fa fa-envelope fa-fw"></i>
              <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
            </li>
          </ul>
        </div>

        <div class="col-md-4 pt-5">
          <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
          <ul class="list-unstyled text-light footer-link-list">
            <li><a class="text-decoration-none" href="#">Home</a></li>
            <li><a class="text-decoration-none" href="#">About Us</a></li>
            <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
            <li><a class="text-decoration-none" href="#">FAQs</a></li>
            <li><a class="text-decoration-none" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="w-100 bg-black py-3">
      <div class="container">
        <div class="row pt-2">
          <div class="col-12">
            <p class="text-left text-light">Copyright &copy; 2022 Dream</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

@endsection
