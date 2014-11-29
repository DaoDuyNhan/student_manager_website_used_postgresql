              <form class="form-horizontal" role="form">
                  <div class="form-group">
                      <label class="col-sm-4 control-label">Họ và tên</label>
                      <div class="col-sm-8">
			  <p class="form-control-static"><?php
							 echo $_SESSION['fullname'];
							 ?></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-4 control-label">Mã số sinh viên</label>
                      <div class="col-sm-8">
			  <p class="form-control-static"><?php
							 echo $_SESSION['username'];
							 ?></p>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword" class="col-sm-4 control-label">Mật khẩu cũ</label>
                      <div class="col-sm-8">
			  <input type="password" class="form-control" id="inputPassword" placeholder="Nhập mật khẩu cũ">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword" class="col-sm-4 control-label">Mật khẩu mới</label>
                      <div class="col-sm-8">
			  <input type="password" class="form-control" id="inputPassword" placeholder="Nhập mật khẩu mới">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword" class="col-sm-4 control-label">Xác nhận mật khẩu mới</label>
                      <div class="col-sm-8">
			  <input type="password" class="form-control" id="inputPassword" placeholder="Nhập lại mật khẩu mới">
                      </div>
                  </div>
                  <div class="col-sm-8 col-sm-offset-4" style="color: red; padding-bottom:15px;"><b>Mật khẩu sai!</b></div>
                  <div class="col-sm-8 col-sm-offset-4" style="color: green; padding-bottom:15px;"><b>Đổi mật khẩu thành công!</b></div>
                  <div class="form-group last">
                      <div class="col-sm-offset-4 col-sm-8">
			  <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                      </div>
                  </div>
              </form>
