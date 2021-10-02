<?php   include('condb.php') ; 

$booking_id = $_GET['booking_id'];

//update status_book book
$sql_status="UPDATE transection SET 
status_book=2 
WHERE booking_id='$booking_id'";
$rs_s=mysqli_query($conn,$sql_status);


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