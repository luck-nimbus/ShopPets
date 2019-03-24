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
                  <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>thanhvien/updateTV">

        
                  <!-- show ID ẩn -->
                  <div class="form-group row">
                    <label for="id" class="col-sm-4 form-control-label text-xs-right"></label>
                    <div class="col-sm-6">
                      <input name="id" type="hidden" class="form-control" id="id" value="<?= $ketquaid['USER_ID'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-4 form-control-label text-xs-right">Tên tài khoản (username): </label>
                    <div class="col-sm-6">
                      <input name="username" type="text" class="form-control" id="username" placeholder="" value="<?= $ketquaid['USER_USERNAME'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-4 form-control-label text-xs-right">Mật khẩu: </label>
                    <div class="col-sm-6">
                      <input name="password" type="text" class="form-control" id="password" placeholder="" value="<?= $ketquaid['USER_PASSWORD'] ?>">
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="level" class="col-sm-4 form-control-label text-xs-right">Cấp bậc: </label>
                      <div class="col-sm-6">
                        <input name="level" type="text" class="form-control" id="level" placeholder=""  value="<?= $ketquaid['USER_LEVEL'] ?>">
                        
                      </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="ten" class="col-sm-4 form-control-label text-xs-right">Tên người dùng: </label>
                      <div class="col-sm-6">
                      
                          <input name="ten" type="text" class="form-control" id="ten" placeholder=""  value="<?= $ketquaid['USER_NAME'] ?>"> 
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-4 form-control-label text-xs-right">Email: </label>
                      <div class="col-sm-6">
                        <input name="email" type="text" class="form-control" id="email" placeholder=""  value="<?= $ketquaid['USER_EMAIL'] ?>">
                      </div>
                  </div>
                   <div class="form-group row">
                    <label for="phone" class="col-sm-4 form-control-label text-xs-right">Số điện thoại: </label>
                      <div class="col-sm-6">
                        <input name="phone" type="text" class="form-control" id="phone" placeholder=""  value="<?= $ketquaid['USER_PHONE'] ?>">
                      </div>
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