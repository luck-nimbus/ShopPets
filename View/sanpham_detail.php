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
    <link rel="stylesheet" href="<?= base_url() ?>css/style.default.css" id="theme-stylesheet">
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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <div id="content">
        <div class="container">
          <section class="bar">
            <div class="row portfolio-project">
              <div class="col-sm-8">
              <?php foreach ($ketquaid as $ketquaid): ?>
                <div class="project owl-carousel mb-4">
                  <div class="item"><img src="<?= $ketquaid['PRO_AVA'] ?>" alt="" class="img-fluid"></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="project-more">
                  <h4>Sản phẩm </h4>
                  <p><?= $ketquaid['PRO_NAME'] ?></p>
                  <h4>Giá </h4>
                  <p><?= $ketquaid['PRO_PRICE'] ?> đồng</p>
                  <!-- <h4>Technologies</h4>
                  <p>PHP, HipHop, Break-dance</p>
                  <h4>Dates</h4>
                  <p>10/2013 - 06/2014</p> -->
                  
                  <div>
                    <a href="<?= base_url() ?>shoppingcart/buy/<?= $ketquaid['PRO_ID'] ?>">Đặt mua</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="heading">
                  <h3>Mô tả chi tiết: </h3>
                </div>
                <p><?= $ketquaid['PRO_DESCRIPTION'] ?></p>
                
                <?php endforeach ?>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Cảm ơn bạn đã ghé thăm</h3>
            </div>
            <div class="col-lg-4 text-center p-3"><a href="<?= base_url() ?>" class="btn btn-template-outlined-white">Quay về trang chủ</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?= base_url() ?>endor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="<?= base_url() ?>vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="<?= base_url() ?>vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="<?= base_url() ?>js/jquery.parallax-1.1.3.js"></script>
    <script src="<?= base_url() ?>vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url() ?>js/front.js"></script>

    <script>
      function btn(){
        alert("Cảm ơn thầy đã click NHƯNG em không code nổi chức năng này :(");
      }
    </script>
  </body>
</html>