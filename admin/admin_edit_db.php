<?php include('condb.php'); 

$admin_id =$_POST['admin_id'];
$username =$_POST['username'];
$password =$_POST['password'];
$name =$_POST['name'];


$sql_edit="UPDATE admin SET 
admin_id='$admin_id',
username= '$username',
password = '$password',
name = '$name'
WHERE admin_id='$admin_id'";
$result_edit = mysqli_query($conn,$sql_edit);


mysqli_close($conn);

echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';		
if($result_edit){
    echo '
    <script>
       setTimeout(function() {
        swal({
            title: "สำเร็จ",
            text: "แก้ไขข้อมูลสำเร็จ",
            type: "success"
        }, function() {
            window.location = "admin.php";
        });
    }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('แก้ไขข้อมูลไม่สำเร็จ');";
echo "window.location = 'admin.php' ";
echo "</script>";
}

?>