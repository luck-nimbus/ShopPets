<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Universal - All In 1 Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap-select/css/bootstrap-select.min.css">
  <!-- owl carousel-->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url() ?>vendor/owl.carousel/assets/owl.theme.default.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php base_url() ?>css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?= base_url() ?>css/custom.css">
  <!-- Favicon and apple touch icons-->
  <link rel="shortcut icon" href="<?= base_url() ?>img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?= base_url() ?>img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
</head>

<body>
  <div id="all">
    <!-- Login Modal-->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true"
      class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
          <form action="<?php echo base_url().'Login/log' ?>" method="post" id="form">
              <div class="form-group">
                <input name="username" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input name="password" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="submit" name="submit"class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Đăng nhập bởi tài khoản CTV</p>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Login modal end-->
    <div id="register-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true"
      class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="login-modalLabel" class="modal-title">Customer Register</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form  method="post" enctype="multipart/form-data" action="user/insert_User" >
              <div class="form-group">
                <input name="user_modal" id="user_modal" type="text" placeholder="user" class="form-control">
              </div>
              <div class="form-group">
                <input name="password_modal" id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <div class="form-group">
                <input name="name_modal" id="name_modal" type="text" placeholder="yourname" class="form-control">
              </div>
              <div class="form-group">
                <input name="email_modal" id="email_modal" type="text" placeholder="youremail" class="form-control">
              </div>
              <div class="form-group">
                <input name="phone_modal" id="phone_modal" type="number" placeholder="yourphone" class="form-control">
              </div>
              <p class="text-center">
                <button type="submit"class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Register Now</button>
              </p>
              <p class="text-center">Bạn vui lòng chờ duyệt đăng ký qua mail</p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
      <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="./img/dogicon.png"
              style="height: 64px" alt="Universal logo" class="d-none d-md-inline-block"><img src="./img/dogicon.png"
              alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Pets shop</span></a>
          <button type="button" data-toggle="collapse" data-target="#navigation"
            class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i
              class="fa fa-align-justify"></i></button>
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown"
                  class="dropdown-toggle">Trang chủ <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Sản phẩm <b
                    class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="<?= base_url() ?>show" class="nav-link">Tất cả sản phẩm</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a href="" data-toggle="dropdown"
                  class="dropdown-toggle">Cộng tác viên <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="contact.html" class="nav-link" data-toggle="modal"
                      data-target="#login-modal">Đăng nhập</a></li>
                  <li class="dropdown-item"><a href="contact.html" class="nav-link" data-toggle="modal"
                      data-target="#register-modal">Đăng ký</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- Navbar End-->

    <div id="heading-breadcrumbs">
      <div class="container">
        <!-- nền -->
      </div>
    </div>
    <div id="content">
      <div class="container">
        <div class="row bar">
          <div class="col-md-3">
            <!-- MENUS AND FILTERS-->
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading">
                <h3 class="h4 panel-title">Danh mục sản phẩm</h3>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills flex-column text-sm category-menu">
                  <li class="nav-item"><a href="shop-category.html"
                      class="nav-link d-flex align-items-center justify-content-between"><span>Sản phẩm cho thú nuôi
                      </span></a>
                    <ul class="nav nav-pills flex-column">
                      <li class="nav-item"><a href="" class="nav-link">Thức ăn</a></li>
                      <li class="nav-item"><a href="" class="nav-link">Quần áo</a></li>
                      <li class="nav-item"><a href="" class="nav-link">Y tế</a></li>
                      <li class="nav-item"><a href="" class="nav-link">Đồ chơi</a></li>
                    </ul>
                  </li>            
                </ul>
              </div>
            </div>
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading d-flex align-items-center justify-content-between">
                <h3 class="h4 panel-title">Thương hiệu</h3>
              </div>
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Armani
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Versace
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Carlo Bruni
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Jack Honey
                      </label>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="banner">
              <div class="panel-heading d-flex align-items-center justify-content-between">
                <h3 class="h4 panel-title">Tìm gì đó đi</h3>
              </div>
              <input style="float: left; width: 170px" type="text" placeholder="vẫn chưa đâu">
              <button style="width: 30px; height: 30px;"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </div>
          <div class="col-md-9">
            <p class="text-muted lead">In our Ladies department we offer wide selection of the best products we have
              found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>
            <div class="row products products-big">
              <?php foreach ($mang as $data): ?>
              <div class="col-lg-4 col-md-6">
              
                <div class="product">
                  <div class="image"><a href="<?= base_url() ?>sanpham_home/detailSP/<?= $data['PRO_ID'] ?>"><img src="<?= $data['PRO_AVA'] ?>" alt=""
                        class="img-fluid image1"></a></div>
                  <div class="text">
                    <h3 class="h5"><a href="<?= base_url() ?>sanpham_home/detailSP/<?= $data['PRO_ID'] ?>"><?= $data['PRO_NAME'] ?></a></h3>
                    <p class="price">
                    <?= $data['PRO_PRICE'] ?> đồng
                    </p>
                  </div>
                  <div class="ribbon-holder">
                    <div class="ribbon sale">SALE</div>
                    <div class="ribbon new">HOT</div>
                  </div>          
                </div>
              </div>
              <?php endforeach ?>
            </div>
            <div class="pages">
              <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i
                    class="fa fa-chevron-down"></i> Load more</a></p>
              <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                <ul class="pagination">
                  <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                  <li class="page-item active"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">4</a></li>
                  <li class="page-item"><a href="#" class="page-link">5</a></li>
                  <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- GET IT-->
    <div class="get-it">
      <div class="container">
        <div class="row" style="height: 100px">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pd5" style="">
            <h3>Miễn phí vận chuyển</h3>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pd5">
            <h3>Miễn phí vận chuyển</h3>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pd5">
            <h3>Miễn phí vận chuyển</h3>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pd5">
            <h3>Miễn phí vận chuyển</h3>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row" style="margin: auto">
            <div class="col-lg-6">
              <h4 class="h6">About Us</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              <hr>
              <h4 class="h6">Join Our Monthly Newsletter</h4>

              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-6" style="padding-left: 185px;padding-bottom: 10px;">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River
                <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html"
                class="btn btn-template-main">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
          </div>
        </div>

      </footer>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
</body>

</html>