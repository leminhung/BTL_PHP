<div class="row header">
  <div class="row head  ">
    <div class="col-12 nav-item dropdown nav-custom">
      <a class=" col-2 nav-link dropdown-toggle nav-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user"></i> <?php
                                    if (isset($_SESSION['username'])) {
                                      echo $_SESSION['username'];
                                    } else {
                                      echo 'Tài khoản';
                                    }
                                    ?>
      </a>
      <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
        <a class="dropdown-item dropdown-item-custom" href="./signup">Đăng ký</a>
        <div class="dropdown-divider margin: 3px 0;"></div>
        <?php
        if (!isset($_SESSION['username'])) {
          echo '<a class="dropdown-item dropdown-item-custom" href="./signin">Đăng nhập</a>';
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
        }
        ?>
        <a class="dropdown-item dropdown-item-custom" href="#">Giỏ hàng</a>
        <div class="dropdown-divider margin: 3px 0;"></div>
        <a class="dropdown-item dropdown-item-custom" href="#">Thanh toán </a>
        <div class="dropdown-divider margin: 3px 0;"></div>
        <a class="dropdown-item dropdown-item-custom" href="#">Tra cứu đơn hàng </a>
        <?php
        if (isset($_SESSION['username'])) {
          echo '<div class="dropdown-divider margin: 3px 0;"></div>';
          echo '<a class="dropdown-item dropdown-item-custom" href="./signout">Đăng xuất </a>';
        }
        ?>
      </div>
    </div>
  </div>
  <div class="row col-12 logo-search-cart">
    <div style="justify-content: end !important;" class="col-3 logo">
      <img width="20%" src="./image/Free_Sample_By_Wix__1_-removebg-preview.png" alt="">
    </div>
    <div class="col-6">
      <div class="input-group mb-3 mt-3">
        <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
    <div class="col-3 py-3">
      <i style="font-size: 24px !important;" class="fas fa-shopping-cart"></i>
    </div>
  </div>

  <div class="row col-12 mb-3">
    <ul style="margin: auto;" class="nav ">
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="./trangchu.php">Trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Về chúng tôi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="./index.php">Tất cả sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Hướng dẫn mua hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Cách chọn size</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Tin tức giày</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">Hệ thống cửa hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">khách hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom" href="#">liên hệ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active nav-link-active-custom sale-off" href="#">Sale off</a>
      </li>
    </ul>
  </div>
</div>