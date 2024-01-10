<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cham soc thu cung</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" sizes="32x32" href="/img/pet-care.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
      <div class="container px-0">
        <nav class="navbar navbar-secondary bg-white navbar-expand-xl">
          <a href="index.html" class="navbar-brand"
            ><h1 class="text-primary display-6">Pet Care</h1></a
          >
          <button
            class="navbar-toggler py-2 px-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars text-primary"></span>
          </button>
          <div
            class="collapse navbar-collapse bg-secondary"
            id="navbarCollapse"
          >
            <div class="navbar-nav mx-auto">
              <a href="index.html" class="nav-item nav-link active"
                >Trang chu</a
              >
              <a href="shop.html" class="nav-item nav-link">san pham</a>

              <a href="contact.html" class="nav-item nav-link">huong dan</a>
              <a href="contact.html" class="nav-item nav-link">lien lac</a>
            </div>
            <div class="d-flex m-3 me-0">
              <button
                class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                data-bs-toggle="modal"
                data-bs-target="#searchModal"
              >
                <i class="fas fa-search text-primary"></i>
              </button>
              <a href="#" class="position-relative me-4 my-auto">
                <i class="fa fa-shopping-bag fa-2x"></i>
                <span
                  class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                  style="top: -5px; left: 15px; height: 20px; min-width: 20px"
                  >3</span
                >
              </a>
              <a href="fromdangnhap.html" class="my-auto">
                <i class="fas fa-user fa-2x"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Modal Search Start -->
    <div
      class="modal fade"
      id="searchModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Search by keyword
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body d-flex align-items-center">
            <div class="input-group w-75 mx-auto d-flex">
              <input
                type="search"
                class="form-control p-3"
                placeholder="keywords"
                aria-describedby="search-icon-1"
              />
              <span id="search-icon-1" class="input-group-text p-3"
                ><i class="fa fa-search"></i
              ></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Search End -->

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-md-12 col-lg-7">
            <h4 class="mb-3 text-danger">100% Organic Foods</h4>
            <h1 class="mb-5 display-3 text-primary">
              Đồ ăn hữu cơ cho chó và mèo
            </h1>
            <div class="position-relative mx-auto">
              <input
                class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill"
                type="number"
                placeholder="Bạn tìm gì?"
              />
              <button
                type="submit"
                class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100"
                style="top: 0; right: 25%"
              >
                Tìm kiếm
              </button>
            </div>
          </div>
          <div class="col-md-12 col-lg-5">
            <div
              id="carouselId"
              class="carousel slide position-relative"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active rounded">
                  <img
                    src="img/anh3.jpg"
                    class="img-fluid w-100 h-100 bg-secondary rounded"
                    alt="First slide"
                  />
                </div>
                <div class="carousel-item rounded">
                  <img
                    src="img/anh5.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Second slide"
                  />
                </div>
                <div class="carousel-item rounded">
                  <img
                    src="img/anh1.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Second slide"
                  />
                </div>
                <div class="carousel-item rounded">
                  <img
                    src="img/anh2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Second slide"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
      <div class="container py-5">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto"
              >
                <i class="fas fa-car-side fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <h5>Free Shipping</h5>
                <p class="mb-0">Miễn phí ship 3km</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto"
              >
                <i class="fas fa-user-shield fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <h5>Security Payment</h5>
                <p class="mb-0">bảo mật thanh toán 100%</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto"
              >
                <i class="fas fa-exchange-alt fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <h5>30 Day Return</h5>
                <p class="mb-0">30 ngày hoàn trả miễn phí</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="featurs-item text-center rounded bg-light p-4">
              <div
                class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto"
              >
                <i class="fa fa-phone-alt fa-3x text-white"></i>
              </div>
              <div class="featurs-content text-center">
                <h5>24/7 Support</h5>
                <p class="mb-0">Hỗ trợ 24/7</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featurs Section End -->

    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
      <div class="container py-5">
        <h1>Các sản phẩm của chúng tôi</h1>
        <div class="tab-class text-center">
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="row g-4">
                  <?php
      require_once 'ketnoi.php';
      $lietkesanpham_sql = " SELECT * FROM sanpham order by id";
      $result = mysqli_query($conn, $lietkesanpham_sql);
      while ($r = mysqli_fetch_assoc($result)){
      ?>
      <div class="col-md6 col-lg-4 col-xl-3">
                      <div class="card">
                        <td><img
                          class="card-img-top"
                          src="./img/sanpham/<?php echo $r['hinhanh']; ?>"
                          alt="Card image"
                        /></td>
                        <div class="card-body">
                          <h4 class="card-title">
                          <td><?php echo $r['tensanpham'];?></td>
                          </h4>
                          <p class="card-text"><?php echo $r['gia'];?></p>
                          <a href="#" class="btn btn-primary"
                            >Thêm vào giỏ hàng</a
                          >
                        </div>
                      </div>
                    </div>
                    <?php
    }
    ?>
    </div>
        </div>
    </div>
    </div>
        </div>

    
    <!-- Fruits Shop End-->

    <!-- Fact Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="bg-light p-5 rounded">
          <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Sự hài lòng của khách hàng</h4>
                <h1>1963</h1>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Chất lượng dịch vụ</h4>
                <h1>99%</h1>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Chứng chỉ an toàn</h4>
                <h1>33</h1>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
              <div class="counter bg-white rounded p-5">
                <i class="fa fa-users text-secondary"></i>
                <h4>Các sản phẩm sẵn có</h4>
                <h1>789</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fact Start -->

    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
      <div class="container py-5">
        <div class="testimonial-header text-center">
          <h1 class="display-5 mb-5 text-dark">Khách hàng nói về chúng tôi</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
              <i
                class="fa fa-quote-right fa-2x text-secondary position-absolute"
                style="bottom: 30px; right: 0"
              ></i>
              <div class="mb-4 pb-4 border-bottom border-secondary">
                <p class="mb-0">
                  Lorem Ipsum is simply dummy text of the printing Ipsum has
                  been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
              <div class="d-flex align-items-center flex-nowrap">
                <div class="bg-secondary rounded">
                  <img
                    src="img/testimonial-1.jpg"
                    class="img-fluid rounded"
                    style="width: 100px; height: 100px"
                    alt=""
                  />
                </div>
                <div class="ms-4 d-block">
                  <h4 class="text-dark">Tôi</h4>
                  <p class="m-0 pb-3">
                    cho 1 sao nhưng chi đánh giá được 5sao =3
                  </p>
                  <div class="d-flex pe-5">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-item img-border-radius bg-light rounded p-4">
            <div class="position-relative">
              <i
                class="fa fa-quote-right fa-2x text-secondary position-absolute"
                style="bottom: 30px; right: 0"
              ></i>
              <div class="mb-4 pb-4 border-bottom border-secondary">
                <p class="mb-0">Làm ăn như thế này chỉ có ăn ...</p>
              </div>
              <div class="d-flex align-items-center flex-nowrap">
                <div class="bg-secondary rounded">
                  <img
                    src="img/testimonial-1.jpg"
                    class="img-fluid rounded"
                    style="width: 100px; height: 100px"
                    alt=""
                  />
                </div>
                <div class="ms-4 d-block">
                  <h4 class="text-dark">Nguyễn Thi Hoa</h4>
                  <p class="m-0 pb-3">Phong cách làm việc rất chuyên nghiệp</p>
                  <div class="d-flex pe-5">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Tastimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="text-light mb-3">
                Tại sao bạn nên lựa chọn chúng tôi
              </h4>
              <p class="mb-4">
                Chúng tôi cung cấp các dịch vụ tốt nhất, các sản phẩm tốt nhất
                đến tay các bạn như dân đa cấp vậy :3
              </p>
              <a
                href=""
                class="btn border-secondary py-2 px-4 rounded-pill text-primary"
                >Read More</a
              >
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex flex-column text-start footer-item">
              <h4 class="text-light mb-3">Thông tin cửa hàng</h4>
              <a class="btn-link" href="">Về chúng tôi</a>
              <a class="btn-link" href="">Tầm nhìn</a>
              <a class="btn-link" href="">Giá trị cốt lõi</a>
              <a class="btn-link" href="">CHính sách &Điều khoản</a>
              <a class="btn-link" href="">CHính sách hoàn tiền</a>
              <a class="btn-link" href="">Trợ giúp</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex flex-column text-start footer-item">
              <h4 class="text-light mb-3">Tài khoản</h4>

              <a class="btn-link" href="">Cửa hàng chi tiết</a>
              <a class="btn-link" href="">Giỏ hàng</a>
              <a class="btn-link" href="">Wishlist</a>
              <a class="btn-link" href="">Lịch sử giao dịch</a>
              <a class="btn-link" href="">Đơn hàng quốc tế</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-item">
              <h4 class="text-light mb-3">Liên lạc</h4>
              <p>Address: truong dai hoc cong nghe dong a</p>
              <p>Email: huong@gmail.com</p>
              <p>Phone: +0123 4567 8910</p>
              <p>Chấp nhận thanh toán</p>
              <img src="img/payment.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <span class="text-light"
              ><i class="fas fa-copyright text-light me-2"></i>Pet Care, All
              right reserved.</span
            >
          </div>
          <div class="col-md-6 my-auto text-center text-md-end text-white">
            Designed By
            <a class="border-bottom" href="https://www.facebook.com/huong043"
              >Huong</a
            >
          </div>
        </div>
      </div>
    </div>
   
    <!-- Copyright End -->
  </body>
</html>
