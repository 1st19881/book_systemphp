<?php   include('condb.php') ; 

$booking_id = $_GET['booking_id'];
$book_id = $_GET['book_id'];
//update status_book book
$sql_status="UPDATE transection SET 
status_book=3 
WHERE booking_id='$booking_id'";
$rs_s=mysqli_query($conn,$sql_status);

//update status_book book
$sql_status1="UPDATE book SET status=1 WHERE book_id='$book_id'";
$rs_s1=mysqli_query($conn,$sql_status1);



if($rs_s){
    echo "<script type='text/javascript'>";
    echo "alert('เรียบร้อย');";
    echo "window.location = 'order.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location = 'order.php'; ";
    echo "</script>";
  }

?>