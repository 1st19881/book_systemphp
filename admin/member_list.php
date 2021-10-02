<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT * FROM member
ORDER BY member_id ASC";
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  table-responsive" align="center">
    <thead>
        <tr class="info">
            <th width="5%" scope="col">#</th>
            <th width="5%" class="text-nowrap" scope="col">รหัสmember</th>
            <th width="20%" class="text-nowrap" scope="col">ชื่อ - นามสกุล</th>
            <th width="15%" class="text-nowrap" scope="col">username</th>
            <th width="15%" class="text-nowrap" scope="col">password</th>
            <th width="10%" class="text-nowrap" scope="col">ระดับ</th>
            <th width="10%" scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['member_id']; ?></td>
        <td><?php echo $row_p['title']." ".$row_p['name']." - ".$row_p['lastname']; ?></td>
        <td><?php echo $row_p['username']; ?></td>
        <td><?php echo $row_p['password']; ?></td>
        <td><?php echo $row_p['member_type']; ?></td>
        <td>
            <div class="d-flex">
                <a href="member.php?act=edit&ID=<?php echo $row_p['member_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="member.php?act=delete&member_id=<?php echo $row_p['member_id']; ?>"
                    class="btn btn-danger btn-flat"
                    onclick="return confirm('ต้องการลบข้อมุลสมาชิก ID : <?php echo $row_p['member_id']; ?>')">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>