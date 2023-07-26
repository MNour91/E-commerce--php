<?php
$id = $_GET['id'];
$select_edit = $connect -> query("SELECT * FROM users WHERE id = '$id'");
$row_edit = $select_edit -> fetch_assoc();
$priv = $row_edit['priv'];

?>
<form method="post" action="functions/user_edit.php" style="width: 90%;margin:auto;">
<input type="hidden" name="id" value="<?php echo$id; ?>">
  <div class="form-group">

    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="<?php echo$row_edit['name'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?php echo$row_edit['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="email">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="<?php echo$row_edit['phone'] ?>" class="form-control" id="exampleInputEmail1" placeholder="phone">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" <?php if($row_edit['gender'] == 0){echo"checked";} ?>>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" <?php if($row_edit['gender'] == 1){echo"checked";} ?>>
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="<?php echo$row_edit['address'] ?>"  class="form-control" id="exampleInputEmail1" placeholder="Address">
  </div>
<br>
  <div class="form-group " <?php if($_SESSION['priv']!=0) { echo"hidden";} ?> >
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1" >
      <option value="0" <?php if($row_edit['priv'] == 0){echo"selected";} ?>>Owner</option>
      <option value="1" <?php if($row_edit['priv'] == 1){echo"selected";} ?>>Admin</option>
      <option value="0" <?php if($row_edit['priv'] == 2){echo"selected";} ?>>Editor</option>
      <option value="1" <?php if($row_edit['priv'] == 3){echo"selected";} ?>>Supervisor</option>

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Edit User">

</form>
<br>