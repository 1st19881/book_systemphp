<?php 
include('condb.php');
	$username = mysqli_real_escape_string($conn,$_POST["username"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
	$title = mysqli_real_escape_string($conn,$_POST["title"]);
	$name = mysqli_real_escape_string($conn,$_POST["name"]);
	$lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
	$phone = mysqli_real_escape_string($conn,$_POST["phone"]);
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
    $member_type = mysqli_real_escape_string($conn,$_POST["member_type"]);
	
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit;

	$sql = "INSERT INTO member
	(phone,title,name,lastname,email,username,password,member_type)
	VALUES
	('$phone','$title','$name','$lastname','$email','$username','$password','$member_type')";


	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';		
if($result){
  echo '
  <script>
     setTimeout(function() {
    swal({
      title: "Success",
      text: "สำเร็จ",
      type: "success"
    }, function() {
      window.location = "index.php?act=login";
    });
  }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ไม่สำเร็จ');";
echo "window.location = 'index.php?act=regis' ";
echo "</script>";
}
 ?>