<?php  include('condb.php');

$member_id = $_SESSION['member_id'];

$sql="SELECT * FROM member WHERE member_id=$member_id ";
$rs_m = mysqli_query($conn,$sql);
$row_m=mysqli_fetch_array($rs_m);

?>
<div class="col-md-12">
<form  name="register" action="profile_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-md-12" align="center">
      <h4> แก้ไขข้อมูลส่วนตัว </h4><hr>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> รหัสสมาชิก:</div>
    <div class="col-md-4" align="left">
      <input  name="username" type="text" required class="form-control"  value="<?php echo $row_m['member_id']; ?>" readonly>  
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> ระดับผู้ใช้:</div>
    <div class="col-md-4" align="left">
      <input  name="username" type="text" required class="form-control"  value="<?php echo $row_m['member_type']; ?>" readonly>  
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> username :</div>
    <div class="col-md-12" align="left">
      <input  name="username" type="text" required class="form-control"  value="<?php echo $row_m['username']; ?>">  
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2" align=""> password :</div>
    <div class="col-md-12" align="left">
      <input  name="password" type="password" required class="form-control" id="m_pass" value="<?php echo $row_m['password']; ?>">
    </div>
  </div>

  <div class="form-group">
  <div class="col-sm-2" align="left"> คำนำหน้า :</div>
    <div class="col-md-12" align="left">
    <select name="title" class="form-control" id="exampleFormControlSelect1">
     <option value=""><?php echo $row_m['title']; ?></option>
      <option value="นาย">นาย</option>
      <option value="นางสาว">นางสาว</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อ:</div>
    <div class="col-md-12" align="left">
      <input  name="name" type="text" required class="form-control" id="m_name" placeholder="" value="<?php echo $row_m['name']; ?>">
    </div>
    <div class="col-sm-2" align=""> นามสกุล:</div>
    <div class="col-md-12" align="left">
      <input  name="lastname" type="text" required class="form-control" id="m_name" placeholder="" value="<?php echo $row_m['lastname']; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3" align=""> อีเมล : </div>
    <div class="col-md-12" align="left">
      <input  name="email" type="email" class="form-control" id="m_email" required  placeholder=""value="<?php echo $row_m['email']; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> เบอร์โทรศัพท์ : </div>
    <div class="col-md-12" align="left">
      <input  name="phone" type="text" class="form-control" id="m_tel" required  placeholder="" maxlength="10"  value="<?php echo $row_m['phone']; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-md-12" align="right">
        <input type="hidden" name="member_id" value="<?php  echo $member_id;  ?>">
        <input type="hidden" name="member_type" value="member">
      <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span> บันทึก  
      </button> <a href="index.php" type="button" class="btn btn-danger btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a>
    </div>
    
  </div>
</form>
</div>