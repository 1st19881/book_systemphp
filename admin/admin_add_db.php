<meta charset="UTF-8">
<?php
include('condb.php'); 

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$level = $_POST['level'];
	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

		$sql = "INSERT INTO  admin(username,password,name,level)VALUES('$username','$password','$name','$level')";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
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
				title: "สำเร็จ",
				text: "เพิ่มข้อมูลสำเร็จ",
				type: "success"
			}, function() {
				window.location = "admin.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
echo "window.location = 'admin.php' ";
echo "</script>";
}
?>