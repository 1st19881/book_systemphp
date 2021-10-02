<?php  include('condb.php');  

$numrand = (mt_rand());

	// echo '<pre>';
	// print_r($_REQUEST);
	// print_r($_FILES);
	// echo '</pre>';
	// exit;

$member_id = $_POST['member_id'];
$book_id   = $_POST['book_id'];
$book_name    =$_POST['book_name'];
$price   =$_POST['price'];
$status_book   =$_POST['status_book'];

//insert booking book
$sql="INSERT INTO transection (book_id,book_name,member_id,price,status_book)
VALUES('$book_id','$book_name','$member_id','$price','$status_book')";
$result=mysqli_query($conn,$sql)or die ("Error in query: $sql " . mysqli_error());

//update status_book book
$sql_status="UPDATE book SET status=2 WHERE book_id='$book_id'";
$rs_s=mysqli_query($conn,$sql_status);


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
				text: "",
				type: "success"
			}, function() {
				window.location = "index.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
echo "window.location = 'index.php' ";
echo "</script>";
}


?>