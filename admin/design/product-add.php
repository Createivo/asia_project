<form method="post" action="functions/addNewPro.php" enctype="multipart/form-data">
  <div class="form-group">

    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value="" class="form-control" id="exampleInputEmail1" >
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1"> sale</label>
    <input type="text" name="sale" value="" class="form-control" id="exampleInputEmail1" >
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1"> Image </label>
    <input type="file" name="img" value="" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> desc </label>
    <input type="text" name="desc" value="" class="form-control" id="exampleInputEmail1" >
  </div>
<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Categories</label>
    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">

<?php 

  require 'functions/connect.php';
  $category = "SELECT * FROM category";
  $cat_query = $conn -> query($category);

  foreach ($cat_query as $row_cat ) {
    

?>
      <option value="<?= $row_cat['cat_id'] ?>" ><?= $row_cat['name'] ?></option>

<?php 

 }

?>
    </select>
  </div>

  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
</form>