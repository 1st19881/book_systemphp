<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-light "style="background-color:#000;">
    <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white" href="profile.php"><?php echo $_SESSION['name'];  ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="book.php">จัดการข้อมูล</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">ออกจากระบบ</a>
            </li>
        </ul>
</nav>