<?php 

include('condb.php');



$book_id=$_GET['book_id'];

$sql_s="SELECT b.*,m.* FROM book as b 
LEFT JOIN member as m ON b.member_id = m.member_id
WHERE book_id = '$book_id' ";
$rs_s = mysqli_query($conn,$sql_s);
$rows = mysqli_fetch_array($rs_s);

$i=1;

?>
<?php include("navbarlogin.php");    ?>
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4 text-center">ยินดีต้อนรับ</h1>
    </div>
    <?php  include("header.php");   ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
            <li class="breadcrumb-item"><a href="detail.php?book_id=<?php echo $book_id;  ?>">กลับไปหน้าที่แล้ว</a></li>
            <li class="breadcrumb-item active" aria-current="page">ยืนยันการจอง : <?php echo $rows['book_name'];  ?></li>
        </ol>
    </nav>
</div>

<section>
    <div class="container">
       <h5>รายการจองหนังสือ</h5>
       <form action="savebook.php" method="post">
       <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th width="10%">ภาพ</th>
                <th>หนังสือ</th>
                <th  width="15%">ราคา</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rs_s as $rows){ ?>
            <tr>
                <td><?php echo $i++;   ?></td>
                <td><img src="../imgbook/<?php echo $rows['img'];?>" alt="" width="100%"></td>
                <td><input class="form-control" name="book_name" type="text" value="<?php echo $rows['book_name'];   ?>" readonly></td>
                <td><input  class="form-control"  name="price" type="text" value="<?php echo $rows['price'];   ?>" readonly></td>
            </tr>
            <?php }  ?>
        </tbody>
       </table>
       <input type="hidden" name="book_id" value="<?php echo $book_id;   ?>">
       <input type="hidden" name="member_id" value="<?php echo $member_id;   ?>">
       <input type="hidden" name="booking_id" value="1234567">
       <input type="hidden" name="status_book" value="1">
      <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-flat btn-success col-2 ">ยืนยัน</button>
       <a href="index.php" class="btn btn-danger btn-flat col-2">ยกเลิก</a>
      </div>
       </form>
    </div>
</section>


<?php  include("footer.php");   ?>