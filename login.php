<style>
.btn {
    border-radius: 0px;
}
</style>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">เข้าสู่ระบบ</li>
  </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto m-5">
                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="text-center">สมาชิก</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin"
                            action="checklogin.php"    method="POST">
                                <div class="form-group">
                                    <label for="uname1">ชื่อผู้ใช้</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username"
                                        id="uname1" required="">
                                </div>
                                <div class="form-group">
                                    <label>รหัสผ่าน</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password"
                                        id="pwd1" required="" autocomplete="new-password">
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right"
                                    id="btnLogin">send</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->