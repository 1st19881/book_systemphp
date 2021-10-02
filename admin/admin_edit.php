<?php include('condb.php');

$admin_id = $_GET['ID'];


$sql_am="SELECT * FROM admin WHERE admin_id='$admin_id'";
$result_am = mysqli_query($conn,$sql_am);
$row_am = mysqli_fetch_array($result_am);

?>


<div class="col-md-12">
    <form name="register" action="admin_edit_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> แก้ไขผู้ดูแลระบบ </h4>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-2" align=""> username</div>
            <div class="col-sm-12" align="left">
                <input name="username" type="text" required class="form-control" value="<?php echo $row_am['username']  ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">password</div>
            <div class="col-sm-12" align="left">
                <input name="password" type="password" required class="form-control" value="<?php echo $row_am['password']  ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">name</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" value="<?php echo $row_am['name']  ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <input type="hidden" name="admin_id" value="<?php echo $admin_id;?>">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="admin.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>
