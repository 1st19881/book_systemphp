<?php include('condb.php'); 


$member_id =$_POST['member_id'];
$username =$_POST['username'];
$password =$_POST['password'];
$name =$_POST['name'];
$lastname =$_POST['lastname'];
$phone =$_POST['phone'];
$email =$_POST['email'];


$sql_edit="UPDATE member SET 
username= '$username',
password = '$password',
name = '$name',
lastname = '$lastname',
phone = '$phone',
email = '$email'
WHERE member_id='$member_id'";
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
            window.location = "member.php";
        });
    }, 100);
</script>
';
}
else{
echo "<script type='text/javascript'>";
echo "alert('แก้ไขข้อมูลไม่สำเร็จ');";
echo "window.location = 'member.php' ";
echo "</script>";
}

?>