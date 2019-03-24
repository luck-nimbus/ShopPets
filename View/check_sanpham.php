<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Notebook | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url() ?>css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url() ?>css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url() ?>css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?= base_url() ?>css/app.css" type="text/css" />
  <script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>1.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
  <section class="vbox">

    <!-- header -->
    <?php
      include('include/header.php'); 
    ?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php 
          include('include/siderbar.php');
        ?>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href="#">Quản lý</a></li>
                <li class="active">Sản phẩm</li>
              </ul>
              <div class="m-b-md">
                <h3 class="m-b-none">SẢN PHẨM</h3>
              </div>
              <section class="panel panel-default">
                <header class="panel-heading">
                  Quản lý sửa dữ liệu
                </header>

                <!-- .form insert -->
                <div class="container">
                  <div class="text-xs-center">
                    <h3 class="display-3">Chỉnh sửa sản phẩm</h3>
                    <hr>
                  </div>

                  <?php foreach ($ketqua_id as $ketquaid): ?>
                  <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>sanpham_check/updateSP">

        
                  <!-- show ID ẩn -->
                  <div class="form-group row">
                    <label for="id_sanpham" class="col-sm-4 form-control-label text-xs-right"></label>
                    <div class="col-sm-6">
                      <input name="id_sanpham" type="hidden" class="form-control" id="id_sanpham" value="<?= $ketquaid['PRO_ID'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="loai_sanpham" class="col-sm-4 form-control-label text-xs-right">Loại sản phẩm: </label>
                    <div class="col-sm-6">
                      <input type="radio" name="loai_sanpham" value="1" id="1">Quần áo</br>
                      <input type="radio" name="loai_sanpham" value="2" id="2">Thức ăn</br>
                      <input type="radio" name="loai_sanpham" value="3" id="3">Phụ kiện
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ten_sanpham" class="col-sm-4 form-control-label text-xs-right">Tên sản phẩm: </label>
                    <div class="col-sm-6">
                      <input name="ten_sanpham" type="text" class="form-control" id="ten_sanpham" placeholder="" value="<?= $ketquaid['PRO_NAME'] ?>">
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="gia_sanpham" class="col-sm-4 form-control-label text-xs-right">Giá: </label>
                      <div class="col-sm-6">
                        <input name="gia_sanpham" type="number" class="form-control" id="gia_sanpham" placeholder="VD: 20"  value="<?= $ketquaid['PRO_PRICE'] ?>">
                      </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="mota_sanpham" class="col-sm-4 form-control-label text-xs-right">Mô tả: </label>
                      <div class="col-sm-6">
                      
                          <input name="mota_sanpham" type="text" class="form-control" id="mota_sanpham" placeholder="VD: 20"  value="<?= $ketquaid['PRO_DESCRIPTION'] ?>"> 
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="sl_sanpham" class="col-sm-4 form-control-label text-xs-right">Số lượng: </label>
                      <div class="col-sm-6">
                        <input name="sl_sanpham" type="number" class="form-control" id="sl_sanpham" placeholder="VD: 20"  value="<?= $ketquaid['PRO_QUATITY'] ?>">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="avatar" class="col-sm-4 form-control-label text-xs-right">Hình sản phẩm: </label>
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="card-img-top img-fluid" src="<?= $ketquaid['PRO_AVA'] ?>" alt="Card image cap">
                        </div>
            
                        <input name="hinh_sanpham" type="file" class="form-control" id="hinh_sanpham" placeholder="Upload">
                        <input name="avatar_old" type="hidden" value="<?= $ketquaid['PRO_AVA'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="active" class="col-sm-4 form-control-label text-xs-right">Duyệt Active: </label>
                      <div class="col-sm-6">
                      <input type="radio" name="active" value="1" id="1">Duyệt</br>
                      <input type="radio" name="active" value="0" id="0">Không duyệt</br> 
                      </div>
                  </div>
                  <?php endforeach ?>
                  <hr>
                  <div class="form-group row text-xs-center">
                    <div class="col-sm-offset- col-sm-10">
                      <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true">  Lưu lại</i></button>
                    </div>
                  </div>
                </form>
    
                </div>
              </section> 
            </section>
          </section>
        </section>  
      </section>
    </section> 
  </section>
  

</body>
</html>