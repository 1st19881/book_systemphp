<div class="col-md-12">
    <form name="register" action="admin_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มผู้ดูแลระบบ </h4>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-2" align=""> username</div>
            <div class="col-sm-12" align="left">
                <input name="username" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">password</div>
            <div class="col-sm-12" align="left">
                <input name="password" type="password" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">name</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <input type="hidden" name="level" value="admin">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="admin.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>
