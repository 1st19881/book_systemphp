<?php 
$menu = "index";



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
                        <span class="info-box-text">สมาชิก</span>
                        <span class="info-box-number">13,648</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ผู้ดูแลระบบ</span>
                        <span class="info-box-number">13,648</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">หนังสือ</span>
                        <span class="info-box-number">13,648</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">รายการจองหนังสือ</span>
                        <span class="info-box-number">13,648</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">ประวัติการจองหนังสือ</span>
                        <span class="info-box-number">13,648</span>
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