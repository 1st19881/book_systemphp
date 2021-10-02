<?php 
$menu = "order";

include('condb.php');


// $sql_c= "SELECT *
//  FROM  order_head
//  WHERE o_status=1 ";
//  $result_c	= mysqli_query($conn, $sql_c);
//  $count_c = mysqli_num_rows($result_c);


// $sql_w= "SELECT *
//  FROM  order_head
//  WHERE o_status=2 ";
//  $result_w	= mysqli_query($conn, $sql_w);
//  $count_w = mysqli_num_rows($result_w);

//  $sql_p= "SELECT *
//  FROM  order_head
//  WHERE o_status=2 ";
//  $result_p	= mysqli_query($conn, $sql_p);
//  $count_p = mysqli_num_rows($result_p);


//  $sql_payment= "SELECT *
//  FROM  order_head
//  WHERE o_status=3 ";
//  $result_payment	= mysqli_query($conn, $sql_payment);
//  $count_payment = mysqli_num_rows($result_payment);



//  $sql_cancel= "SELECT *
//  FROM  order_head
//  WHERE o_status=4 ";
//  $result_comment 	= mysqli_query($conn, $sql_cancel);
//  $count_comment = mysqli_num_rows($result_comment );


//  $sql_all= "SELECT *
//  FROM  order_head";
//  $result_all 	= mysqli_query($conn, $sql_all);
//  $count_all = mysqli_num_rows($result_all );

?>
<title>รายงาน</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">


    <div class="container">
    <h3 class="text-center">Report</h3><br>
        <div class="d-flex justify-content-center">
            <a href="report.php" class="btn btn-warning btn-flat ">รายวัน </a>
            <a href="report.php?act=m" class="btn btn-success btn-flat ">รายเดือน </a>
            <a href="report.php?act=y" class="btn btn-primary btn-flat ">รายปี </a>
        </div>
        <br>
        <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='m'){
            include('report_mount.php'); 
            }
            elseif($act=='y'){
            include('report_year.php');       
            } 
            elseif($act=='ค้นหา'){
                include('report_date.php');       
            } 
            else{
            include('report_day.php'); 
            }
            // if($act=='confirm'){ //ยืนยันชำระเงิน
            // include('list_order_confirm.php');
            // }else if($act=='paid'){   //จ่ายเงืนแล้ว
            // include("list_order_paid.php");
            // }else if($act=='cancel'){  //ยกเลิกสั่งซื้อ
            // include("list_order_cancel.php");
            // }else if($act=='waiting'){  //ยกเลิกสั่งซื้อ
            // include("list_order_waiting.php");  //รอชำระเงิน 
            // }else{
            // include('list_order.php'); // รายการสั่งซื้อทั้งหมด
            // }
           
        ?>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>

</body>

</html>
