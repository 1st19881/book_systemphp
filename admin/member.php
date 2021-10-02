<?php 
$menu = "admin"

?>
<title>จัดการสมาชิก</title>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
    <?php 
        error_reporting( error_reporting() & ~E_NOTICE );
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if($act=="add"){
            echo '';
        }elseif($act=="edit"){
            echo '';
        }elseif($act=="delete"){
            echo '';  
        }else{?>
                <a href="member.php?act=add" class="btn btn-primary btn-flat mb-2">เพิ่มสมาชิก</a>
                <?php } 
        ?> 
        <?php
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if($act=='add'){
        include('member_add.php');
        }else if($act=='edit'){
        include("member_edit.php");
        }else if($act=='delete'){
        include("member_delete.php");
        }else{
        include('member_list.php');
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