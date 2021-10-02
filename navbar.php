<?php include('condb.php'); 

$sql_t="SELECT * FROM booktype";
$rs_t = mysqli_query($conn,$sql_t);


?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#000;">
  <a class="navbar-brand text-white" href="index.php"><img src="https://cdn-icons-png.flaticon.com/512/3426/3426653.png" width="50px" alt=""></a>
  <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <a class="nav-link text-white" href="index.php">หนังสือทั้งหมด</a>
  </li>
    <?php foreach($rs_t as $row_t){ ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?act=show_type&booktype_id=<?php echo $row_t['booktype_id'];?>"><?php echo $row_t['booktype_name'];?></a>
      </li>
      <?php  }?>
      <li class="nav-item">
    <a class="nav-link text-white" href="#">เกี่ยวกับเรา</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">ติดต่อเรา</a>
  </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="" style="border-radius:0;">
      <button class="btn btn-outline-success btn-flat my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>