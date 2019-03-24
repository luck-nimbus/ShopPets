<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Show</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >


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
            <p class="text-center center" style="font-size: 30px" >TẤT CẢ SẢN PHẨM HIỆN CÓ</p>
            <p class="text-center center" style="border-bottom: 1px solid #f390bc" ></p>
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
                    class="fab fa-hotjar"></i> Cảm ơn đã xem sản phẩm</a></p>
              <nav aria-label="Page navigation example" class="d-flex justify-content-center">   
              </nav>
            </div>
          </div>
</body>
</html>