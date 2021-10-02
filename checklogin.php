<?php 

// echo "<pre>";
// 	print_r($_POST);
// 	echo "</pre>";
// 	exit;

session_start();
        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM member 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($conn,$sql);
                

                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';

                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["member_id"] = $row["member_id"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION['member_type'] = $row["member_type"];
                      if($_SESSION["member_type"] =="member"){ 
                        echo '
                        <script>
                        setTimeout(function() {
                        swal({
                                title: "Login Success",
                                text: "สำเร็จ",
                                type: "success",
                                // imageUrl: "https://vistapointe.net/images/hostel-3.jpg",
                                // imageWidth: 2000,
                                // imageHeight: 400,
                            }, function() {
                            window.location = "member/index.php";
                        });
                        }, 50);
                    </script>
                    ';
                      }
                }else{
                    echo '
                    <script>
                        setTimeout(function() {
                        swal({
                                title: "Login error!!!! !!",
                                text: "ผิดพลาด กรุณาลองใหม่อีกครั้ง",
                                type: "warning"
                            }, function() {
                            window.location = "index.php";
                        });
                        }, 100);
                    </script>
                    ';
  
                  }
  
        }
?>