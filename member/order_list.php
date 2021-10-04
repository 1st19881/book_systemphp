<?php
error_reporting( error_reporting() & ~E_NOTICE );

$member_id = $_SESSION['member_id'];

include('condb.php');  

$query = "SELECT * FROM transection as t 
INNER JOIN book as b ON t.book_id=b.book_id
INNER JOIN member as m ON t.member_id = m.member_id
WHERE b.member_id=$member_id";
$result = mysqli_query($conn, $query)or die ("Error in query: $query
query " . mysqli_error());

$i=1;

?>
<h4 class="text-center">ยืนยันจองหนังสือ</h4>

<table class="table table-responsive  table-bordered  datatable " align="center">
    <thead>
        <tr class="info">
            <th width="10%" scope="col">#</th>
            <th width="20%" class="text-nowrap" scope="col">ชื่อหนังสือ</th>
            <th class="text-nowrap" scope="col">สมาชิก</th>
            <th width="10%" class="text-nowrap"scope="col">ราคา/บาท</th>
            <th width="20%" scope="col">วันเวลา</th>
            <th width="10%" scope="col">ภาพ</th>
            <th width="15%" scope="col">สถานะ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['book_name']; ?></td>
        <td><?php echo $row_p['name']; ?></td>
        <td align="center"><?php echo $row_p['price']; ?></td>
        <td><?php echo $row_p['date']; ?></td>
        <td><img src="../imgbook/<?php echo $row_p['img']; ?>" width="100%" alt=""></td>
        <td>
            <?php
            $st = $row_p['status_book']; 
            if($st==1){
                echo "<font style='color:#f0b905;' class='bg-warning p-1'>รอการยืนยัน</font>"; 
            }
            if($st==2){
               echo "<font style='color:#green;' class='bg-success p-1'>ยืนยันแล้ว</font>"; 
           }
           if($st==3){
            echo "<font style='color:#red;' class='bg-danger p-1'>ยกเลิก</font>"; 
        }
            ?>
        </td>
        <td>
            <div class="d-flex">
                <?php 
              $bt_st = $row_p['status_book']; 
              if($bt_st==1){?>
                <a href="order_db.php?booking_id=<?php echo $row_p['booking_id']; ?>"
                    class="btn btn-success btn-flat"  onclick="return confirm('ยันยัน')">ยืนยัน</a>
                    <a href="order_cancel_db.php?booking_id=<?php echo $row_p['booking_id']; ?>&book_id=<?php echo $row_p['book_id']; ?>"
                    class="btn btn-danger btn-flat" onclick="return confirm('ยกเลิก')">ยกเลิก</a>
                <?php   }else{
                  echo "<font style='color:green;'>เรียบร้อย</font>"  ;
                }?>

            </div>
        </td>
    </tr>


    <?php }  ?>


</table>