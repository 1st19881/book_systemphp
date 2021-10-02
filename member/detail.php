<?php  include('condb.php');

$book_id=$_GET['book_id'];

$sql_s="SELECT b.*,m.*,bt.* FROM book as b 
LEFT JOIN member as m ON b.member_id = m.member_id
INNER JOIN booktype as bt ON b.booktype_id = bt.booktype_id
WHERE book_id = '$book_id' ";
$rs_s = mysqli_query($conn,$sql_s);
$rows = mysqli_fetch_array($rs_s);
?>

<div class="container">
<?php include("navbarlogin.php");    ?>
    <div class="jumbotron jumbotron-fluid" style="background-color:#FFD54C;">
        <h1 class="display-4 text-center" >ยินดีต้อนรับ</h1>
    </div>
    <?php  include("header.php");   ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $rows['book_name'];  ?></li>
        </ol>
    </nav>

</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3 mb-5">
                <img src="../imgbook/<?php echo $rows['img'];  ?>" width="100%" height="400px" alt="">
            </div>
            <div class="col-md-8 mt-3 mb-5">
                <p>
                <h5><?php echo $rows['book_name'];  ?></h5>
                </p>
                <p>
                <h5>ชื่อผู้แต่ง: <?php echo $rows['author'];  ?></h5>
                </p>
                <p>
                <h5>หมวดหมู่: <a href="index.php?act=show_type&booktype_id=<?php echo $rows['booktype_id'] ;?>"><?php echo $rows['booktype_name'];  ?></a></h5>
                </p>
                <div class=" col-3 p-2" style="background-color:#FFD54C;">
                <h5><i class="fas fa-shopping-basket"></i> ราคา : <?php echo $rows['price'];  ?> ฿</h5>
                </div>
                <br>
               <div class="mt-5">
               <a href="index.php" class="btn btn-danger btn-flat col-2">กลับ</a>
               <?php 
                $st= $rows['status'];
                if($st == 1){?>
                 <a href="confirm.php?book_id=<?php echo $rows['book_id'];  ?>" class="btn  btn-flat col-2" style="background-color:#FFD54C;">จองหนังสือ</a>    
                <?php } else if($st == 2){ ?>
                <button class="btn btn-flat btn-danger disabled">ติดจอง</button>        
                 <?php  }?>
               </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                    เรื่องย่อ
                    </div>
                </div>
                <div class="card-body">
                    <p><?php echo $rows['book_detail'];  ?></p>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <div class="card-title">
                    ข้อมูลติดต่อซื้อกับผู้ขายโดยตรง
                    </div>
                </div>
                <div class="card-body">
            <p>ชื่อ <?php echo $rows['name'];  ?></p>
            <p>เบอร์โทร <?php echo $rows['phone'];  ?></p>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
    </div>
</section>


<?php  include("footer.php");   ?>