<?php 

include('condb.php');

$query_total = "SELECT SUM(price) as total_price FROM transection WHERE status_book=2";
$result2 = mysqli_query($conn, $query_total) or die ("Error in query: $query_total " . mysqli_error());
$count_total = mysqli_fetch_array($result2);

$query_member = "SELECT * FROM member ";
$result3 = mysqli_query($conn, $query_member) or die ("Error in query: $query_member " . mysqli_error());
$count_member = mysqli_num_rows($result3);

$query_admin = "SELECT * FROM admin ";
$result4 = mysqli_query($conn, $query_admin) or die ("Error in query: $query_admin " . mysqli_error());
$count_admin = mysqli_num_rows($result4);

$query_book = "SELECT * FROM book ";
$result5 = mysqli_query($conn, $query_book) or die ("Error in query: $query_book " . mysqli_error());
$count_book = mysqli_num_rows($result5);


$query_order = "SELECT * FROM transection ";
$result5 = mysqli_query($conn, $query_order) or die ("Error in query: $query_order " . mysqli_error());
$count_order = mysqli_num_rows($result5);


?>
<title>หน้าแรก</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<br><br>
<!-- Main content -->
<section class="content">
<center class="mb-4"><h3><i class="fas fa-tachometer-alt"></i> แผงควบคุม</h3></center>
    <div class="container">
        <div class="row">
        <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ยอดฝากขาย</span>
                        <span class="info-box-number"><?php echo $count_total['total_price'];?> บาท</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">สมาชิก</span>
                        <span class="info-box-number"><?php echo $count_member;?> รายการ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ผู้ดูแลระบบ</span>
                        <span class="info-box-number"><?php echo $count_admin;?> รายการ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">หนังสือ</span>
                        <span class="info-box-number"><?php echo $count_book;?> รายการ</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">รายการจองหนังสือ</span>
                        <span class="info-box-number"><?php echo $count_order;?> รายการ</span>
                    </div>
                </div>
            </div>
        </div>
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