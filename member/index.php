<?php 
$menu = "index"
?>
<title>หน้าแรก</title>
<!-- Main content -->
<section class="content">
    <div class="container">
        <?php
        include("navbarlogin.php");
        include("slide.php");
        include("header.php"); 
    ?>
        <br>
        <br>
        <?php  
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        $s = (isset($_GET['s']) ? $_GET['s'] : '');
        if($act=="show_type"){
        include('show_type.php');
        }elseif($s!=""){
        include('search.php');   
        }
        else{
        include('showbook.php');        
        }
        ?>
        <br>
        <br>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>