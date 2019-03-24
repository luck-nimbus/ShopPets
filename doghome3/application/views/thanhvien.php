
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
  <link rel="stylesheet" href="<?= base_url() ?>js/datatables/datatables.css" type="text/css"/>
  <link rel="stylesheet" href="<?= base_url() ?>css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
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
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href="#">Quản lý</a></li>
                <li class="active">Thành viên</li>
              </ul>
              <div class="m-b-md">
                <h3 class="m-b-none">THÀNH VIÊN</h3>
              </div>
               <section class="panel panel-default">
                <header class="panel-heading">
                  Quản lý dữ liệu
                </header>
                <div class="row wrapper">
                  <div class="col-sm-8">
                    <div>
                      <a href="<?= base_url() ?>insertTV"><i class="fa fa-plus"></i> <u>Cấp tài khoản mới</u></a>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="input-group">
                      <input type="text" class="input-sm form-control" placeholder="Chưa search được đâu">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="20"><input type="checkbox"></th>
                        <th class="th-sortable" data-toggle="class">ID
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th>Tên</th>
                        <th>Tên tài khoản</th>
                        <th>Cấp độ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Active</th>
                        <th>Action</th>
                        <th width="30"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($datatv as $datatv): ?>
                      <tr>
                        
                        <td><input type="checkbox" name="post[]" value="2"></td>

                        <td><? $datatv['USER_ID'] ?></td>
                        <td><? $datatv['USER_NAME']?></td>
                        <td><? $datatv['USER_USERNAME'] ?></td>
                        <td><? $datatv['USER_LEVEL'] ?></td>
                        <td><? $datatv['USER_EMAIL'] ?></td>
                        <td><? $datatv['USER_PHONE'] ?></td>
                        <td>
                          <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                        </td>
                        <td>
                          <a href="<?= base_url() ?>thanhvien/editTV/<?= $datatv['USER_ID'] ?>" <i> sửa</i></a>
                        </td>
                       
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">showing items</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script src="<?= base_url() ?>js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url() ?>js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?= base_url() ?>js/app.js"></script>
  <script src="<?= base_url() ?>js/app.plugin.js"></script>
  <script src="<?= base_url() ?>js/slimscroll/jquery.slimscroll.min.js"></script>
</body>
</html>