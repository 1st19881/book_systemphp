<?php
include('condb.php'); 

$query = "SELECT * FROM  booktype ORDER BY booktype_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

?>

<div class="col-md-12">
    <form name="register" action="book_adddb.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มหนังสือ </h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ชื่อหนังสือ :</div>
            <div class="col-sm-12" align="left">
                <input name="book_name" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ประเภทหนังสือ :</div>
            <div class="col-sm-12" align="left">
                <select name="booktype_id" class="form-control" required>
                    <option value="booktype_id">ประเภทหนังสือ</option>
                    <?php foreach($result as $results){?>
                    <option value="<?php echo $results["booktype_id"];?>">
                        <?php echo $results["booktype_name"]; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> ชื่อคนแต่ง : </div>
            <div class="col-sm-12" align="left">
                <textarea name="author" class="form-control" id="" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> ราคา :</div>
            <div class="col-sm-12" align="left">
                <input name="price" type="text" required class="form-control" id="m_name" placeholder="" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ปีที่พิมพ์ : </div>
            <div class="col-sm-12" align="left">
                <textarea name="year_of_publication" class="form-control" id="m_address" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> รายละเอียดหนังสือ : </div>
            <div class="col-sm-12" align="left">
                <textarea name="book_detail" class="form-control" id="detail" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                รูปภาพ :
                <input type="file" name="img" id="card_img" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="book.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>

<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
  <script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('detail');
  function CKupdate() {
      for (instance in CKEDITOR.instances)
          CKEDITOR.instances[instance].updateElement();
  }
</script>