<?php 

$s = $_GET['s'];

$query1 = "SELECT b.*,bt.* FROM book as b
INNER JOIN booktype  as bt ON b.booktype_id=bt.booktype_id
WHERE b.book_name LIKE '%$s%' or bt.booktype_name LIKE '%$s%' or b.price LIKE '%$s%'
ORDER BY b.book_id DESC";
$result1 = mysqli_query($conn, $query1)or die ("Error in query: $query1
query " . mysqli_error());
$count = mysqli_num_rows($result1);

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">หน้าแรก</li>
  </ol>
</nav>
<br>
<h4><i class="fas fa-book"></i> ผลการค้นหา " <?php echo $_GET['s']  ?> "   (  <?php echo $count;  ?> ) รายการ </h4>
<hr style="clear: both;color: red;background-color: #FFD54C;height: 1px;border-width: 0;">
<div class="row">
<?php foreach($result1 as $row){  ?>
        <div class="col-md-3 mb-3 mb-3">
            <div class="card" >
                <img class="card-img-top" src="../imgbook/<?php echo $row['img']  ?>" height="300px" alt="Card image cap">
                <div class="card-body">
                     <p class="card-text"> <?php echo $row['book_name']  ?></p>
                    <p class="card-text">ประเภท <?php echo $row['booktype_name']  ?></p>
                    <p class="card-text">ราคา <?php echo $row['price']  ?> ฿</p>
                    <a class="btn  btn-flat "style="background-color:#FFD54C;" href="detail.php?book_id=<?php echo $row['book_id']; ?>">รายละเอียด</a>
                </div>
            </div>
        </div>
<?php }  ?>
</div>