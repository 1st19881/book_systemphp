<meta charset="UTF-8">
<?php
include('condb.php'); 

date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());


	$book_name = $_POST['book_name'];
	$booktype_id = $_POST['booktype_id'];
	$book_detail = $_POST['book_detail'];
	$price	 = $_POST['price'];
	$author = $_POST['author'];
	$member_id = $_POST['member_id'];
	$status = $_POST['status'];
	$year_of_publication = $_POST['year_of_publication'];
//img
	$img =(isset($_POST['img']) ? $_POST['img'] :'');
	$upload=$_FILES['img']['name'];
	if($upload !='') { 

		$path="../imgbook/";
		$type = strrchr($_FILES['img']['name'],".");
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../imgbook/".$newname;
		move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  
	}else{
		$newname='';
	}


	// echo '<pre>';
	// print_r($_REQUEST);
	// print_r($_FILES);
	// echo '</pre>';
	// exit;

	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql5 = "INSERT INTO  book (book_name,book_detail,author,booktype_id,price,year_of_publication,member_id,img,status)VALUES('$book_name','$book_detail','$author','$booktype_id','$price','$year_of_publication','$member_id','$newname','$status')";
		$result5 = mysqli_query($conn, $sql5) or die ("Error in query: $sql5 " . mysqli_error());
		mysqli_close($conn);
	
	echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	';		
	if($result5){
		echo '
		<script>
		   setTimeout(function() {
			swal({
				title: "สำเร็จ",
				text: "เพิ่มข้อมูลสำเร็จ",
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
echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
echo "window.location = 'book.php' ";
echo "</script>";
}
?>