<?php 
$menu = "book"
?>
<title>ประวัติการจองหนังสือ</title>

<?php include("header2.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
    <?php
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if($act=='detail'){
        include('history_detail.php');
        }else{
        include('history_list.php');
        }
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