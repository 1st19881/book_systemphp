<?php 
$menu = "book"

?>
<title>หนังสือ</title>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
        <div class="row">
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
            <a href="book.php?act=add" class="btn btn-primary btn-flat">เพิ่มหนังสือ</a>
            <?php } 
   ?>
            <div class="col-md-12" style="margin-top: 10px">
                <div class="row">
                    <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='add'){
            include('book_add.php');
            }else if($act=='edit'){
            include("book_edit.php");
            }else if($act=='delete'){
            include("book_delete.php");
            }else{
            include('book_list.php');
            }
            ?>
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