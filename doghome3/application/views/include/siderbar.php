 <aside class="bg-dark lter aside-md hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="<?= base_url() ?>"   class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Trang chủ</span>
                      </a>
                    </li>
                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-columns icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Quản lý</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="<?= base_url() ?>sanpham/xemloaisp" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Loại sản phẩm</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?= base_url() ?>sanpham" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Sản phẩm</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?= base_url() ?>sanpham_check" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Duyệt sản phẩm</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?= base_url() ?>thanhvien" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Thành viên</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?= base_url() ?>sanpham/donhangadmin" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Xem đơn hàng</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?= base_url() ?>sanpham/donhangchitietadmin" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Xem chi tiết đơn hàng</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-dark">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer>
          </section>
        </aside>