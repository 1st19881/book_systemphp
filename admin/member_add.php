<div class="col-md-12">
    <form name="register" action="member_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มสมาชิก </h4>
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
            <div class="col-sm-2" align=""> คำนำหน้าชื่อ</div>
            <div class="col-sm-12" align="left">
            <select class="form-control" id="exampleFormControlSelect1" name="title">
            <option value="นาย">นาย</option>
            <option value="นางสาว">นางสาว</option>
            </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อ</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2" align="">นามสกุล</div>
            <div class="col-sm-12" align="left">
                <input name="lastname" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">อีเมล</div>
            <div class="col-sm-12" align="left">
                <input name="email" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">เบอร์โทร</div>
            <div class="col-sm-12" align="left">
                <input name="phone" type="text" required class="form-control" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="member.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>
