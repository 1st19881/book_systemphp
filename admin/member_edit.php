<?php include('condb.php');

$member_id = $_GET['ID'];


$sql_mb="SELECT * FROM member WHERE member_id='$member_id'";
$result_mb = mysqli_query($conn,$sql_mb);
$row_mb = mysqli_fetch_array($result_mb);

?>

<div class="col-md-12">
    <form name="register" action="member_edit_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> แก้ไขสมาชิก </h4>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2" align=""> username</div>
            <div class="col-sm-12" align="left">
                <input name="username" type="text" required class="form-control" value=" <?php echo $row_mb['username'];?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">password</div>
            <div class="col-sm-12" align="left">
                <input name="password" type="password" required class="form-control" value=" <?php echo $row_mb['password'];?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> คำนำหน้าชื่อ</div>
            <div class="col-sm-12" align="left">
            <select class="form-control" id="exampleFormControlSelect1" name="title">
            <option value=""><?php echo $row_mb['title'];?></option>
            <option value="นาย">นาย</option>
            <option value="นางสาว">นางสาว</option>
            </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อ</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" value=" <?php echo $row_mb['name'];?>">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2" align="">นามสกุล</div>
            <div class="col-sm-12" align="left">
                <input name="lastname" type="text" required class="form-control" value=" <?php echo $row_mb['lastname'];?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">อีเมล</div>
            <div class="col-sm-12" align="left">
                <input name="email" type="text" required class="form-control" value=" <?php echo $row_mb['email'];?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">เบอร์โทร</div>
            <div class="col-sm-12" align="left">
                <input name="phone" type="text" required class="form-control" value=" <?php echo $row_mb['phone'];?>">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <input type="text" name="member_type" value="member">
                <input type="hidden" name="member_id" value=" <?php echo $row_mb['member_id'];?>">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="member.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>
