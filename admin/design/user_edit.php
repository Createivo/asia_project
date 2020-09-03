<?php

  require 'functions/connect.php';
  $id = $_GET['id'];
  $user = "SELECT * FROM users WHERE id = '$id'";
  $query = $conn -> query($user);

  $user_row = $query -> fetch_assoc();


?>

<form method="post" action="functions/editUser.php">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $user_row['id'] ?>">
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="username" value="<?= $user_row['name'] ?>" class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Edit password">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?= $user_row['email'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" 

  <?= $user_row['gender'] == 0 ? "checked" : '' ?>

   >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" 

   <?= $user_row['gender'] == 1 ? "checked" : '' ?>

   >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="<?= $user_row['address'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0" 

       <?= $user_row['priv'] == 0 ? "selected" : '' ?>

       >Admin</option>
      <option value="1" 
 <?= $user_row['priv'] == 1 ? "selected" : '' ?>
       >User</option>

    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>