<meta charset="UTF-8">
<?php
include('condb.php'); 

date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());


	$book_name = $_POST['book_name'];
	$booktype_id = $_POST['booktype_id'];
	$author = $_POST['author'];
	$price	 = $_POST['price'];
	$year_of_publication = $_POST['year_of_publication'];
	$img1 = $_POST['img1'];
	$book_detail = $_POST['book_detail'];
	$book_id = $_POST['book_id'];
//img
	$img = (isset($_POST['img']) ? $_POST['img'] : '');
	$upload=$_FILES['img']['name'];
	if($upload !='') { 

		$path="../imgbook/";
		$type = strrchr($_FILES['img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../imgbook/".$newname;
		move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  
	}else{
		$newname=$img1;
	}


	// echo '<pre>';
	// print_r($_POST);
	// echo '</pre>';
	// exit;

	$sql3 = "UPDATE book SET  
			book_name='$book_name',
			booktype_id='$booktype_id', 
			price='$price',
			year_of_publication='$year_of_publication',
			book_detail='$book_detail',
			img='$newname'
			WHERE book_id='$book_id' ";
	
	
	$result = mysqli_query($conn,$sql3) or die ("Error in query: $sql3 " . mysqli_error());
	
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
				text: "แก้ไขข้อมูลสำเร็จ",
				type: "success"
			}, function() {
				window.location = "book.php";
			});
		}, 100);
	</script>
	';
}
else{
echo "<script type='text/javascript'>";
echo "alert('แก้ไขข้อมูลไม่สำเร็จ');";
echo "window.location = 'book.php' ";
echo "</script>";
}
?>