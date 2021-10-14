<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT * FROM admin
ORDER BY admin_id ASC";
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  table-responsive" align="center">
    <thead>
        <tr class="info">
            <th width="15%" scope="col">#</th>
            <th width="15%" class="text-nowrap" scope="col">รหัสadmin</th>
            <th width="15%" class="text-nowrap" scope="col">ชื่อ</th>
            <th width="15%" class="text-nowrap" scope="col">username</th>
            <th width="15%" class="text-nowrap" scope="col">password</th>
            <th width="15%" class="text-nowrap" scope="col">ระดับ</th>
            <th width="10%" scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['admin_id']; ?></td>
        <td><?php echo $row_p['name']; ?></td>
        <td><?php echo $row_p['username']; ?></td>
        <td><?php echo $row_p['password']; ?></td>
        <td><?php echo $row_p['level']; ?></td>
        <td>
            <div class="d-flex">
                <a href="admin.php?act=edit&ID=<?php echo $row_p['admin_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="admin.php?act=delete&admin_id=<?php echo $row_p['admin_id']; ?>"
                    class="btn btn-danger btn-flat"
                    onclick="return confirm('ต้องการลบข้อมุลผู้ดูแลระบบ ID : <?php echo $row_p['admin_id']; ?>')">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>