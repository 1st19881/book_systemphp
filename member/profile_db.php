<?php 
include('condb.php');

    $member_id = mysqli_real_escape_string($conn,$_POST['member_id']);
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

	$sql = "UPDATE  member SET
	phone='$phone',
    title='$title',
    name='$name',
    lastname='$lastname',
    email='$email',
    username='$username',
    password='$password',
    member_type='$member_type'
	WHERE member_id=$member_id";

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
      window.location = "profile.php";
    });
  }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('ไม่สำเร็จ');";
echo "window.location = 'profile.php' ";
echo "</script>";
}
 ?>