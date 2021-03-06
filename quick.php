    <header>
      <div class="container-fluid">
        <div class="col-md-1">
          <img src="HUST_logo.jpg" class="img-polaroid img-responsive" style="float:right; width: 80px; height: 120px">
        </div>
        <div class="col-md-11 headertext" style="padding-left: 40px">
          <h1 class="">
            <b class="h1">S</b>tudent
            <b class="h1">I</b>nformation
            <b class="h1">S</b>ystem of
            <b class="h1">HEDSPI</b>
            <small style="color: white" class="">
              <b class="sm">H</b>anoi
              <b class="sm"> U</b>niversity of
              <b class="sm"> S</b>cience and
              <b class="sm">T</b>echnology
            </small>
          </h1>
    </div>
      </div>
    </header>
	
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php
					echo $_SESSION['BASE_URL'];
					?>/controllers/user_loginsucess.php" class="">Trang chủ</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thông tin người sử dụng <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php
			     echo $_SESSION['BASE_URL'];
			     ?>/controllers/user_infomation.php" class="">Thông tin cá nhân</a></li>
                <li><a href="<?php
			     echo $_SESSION['BASE_URL'];
			     ?>/controllers/changepassword.php" class="">Đổi mật khẩu</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chương trình đào tạo <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
                <li><a href="#" class="">Chương trình đào tạo sinh viên</a></li>
                <li><a href="#" class="">Danh mục học phần</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kế hoạch học tập <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
                <li><a href="<?php
			     echo $_SESSION['BASE_URL'];
			     ?>/controllers/schedule.php" class="">Biểu đồ</a></li>
                <li><a href="<?php
			     echo $_SESSION['BASE_URL'];
			     ?>/controllers/timetable.php" class="">Thời khóa biểu</a></li>
                <li><a href="#" class="">Lịch thi</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kết quả học tập <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
                  <li><a href="#" class="">Bảng điểm cá nhân</a></li>
                  <li><a href="#" class="">Bảng điểm lớp học thi</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đăng ký học tập <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
                <li><a href="#" class="">Danh sách học phần</a></li>
                <li><a href="#" class="">Đăng ký học phần</a></li>
                <li><a href="#" class="">Danh sách đăng ký lớp</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tra cứu <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
                <li><a href="#" class="">Danh sách lớp sinh viên</a></li>
                <li><a href="#" class="">Sinh viên đăng ký học tập</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hướng dẫn <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
                <li><a href="#" class="">Hướng dẫn đăng ký lớp</a></li>
              </ul>
            </li>
          </ul>
          <p class="navbar-text navbar-right">Sinh viên: <b class=""><?php
									if(isset($_SESSION['username']) && isset($_SESSION['fullname'])){
									echo $_SESSION['fullname'];
									}
									?></b>  <a href="<?php
											 echo $_SESSION['BASE_URL'];
											 ?>/controllers/user_logout.php" class="navbar-link">[Đăng xuất]</a></p>
        </div>
      </div>
    </nav>
