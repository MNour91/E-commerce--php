<?php
$id =$_GET['id'];
$view = $connect ->query("select * from products where id ='$id'");
$row_pro = $view -> fetch_assoc();
?>

<form method="post" action="functions/product_edit.php" style="width: 90%; margin:auto;" enctype="multipart/form-data">
  <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $id?>" >
    <label for="exampleInputEmail1">Name product</label>
    <input type="text" name="name" value="<?php echo $row_pro['name']?>" class="form-control" id="exampleInputEmail1" placeholder="enter Name product">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="number"  name="price"  value="<?php echo $row_pro['price']?>" class="form-control" id="exampleInputEmail1" placeholder="enter price">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">seller</label>
    <input type="text" name="seller" value="<?php echo $row_pro['seller']?>" class="form-control" id="exampleInputEmail1" placeholder="seller">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">discount</label>
    <input type="number" name="discount" value="<?php echo $row_pro['discount']?>" class="form-control" id="exampleInputEmail1" placeholder="discount">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="file"  name="main_image" id="inlineRadio1" required >
  <label class="form-check-label" for="inlineRadio1">main_image</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="file" name="files[]" id="inlineRadio2" multiple required>
  <label class="form-check-label" for="inlineRadio2">other_images</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> quantity</label>
    <input type="number" name="quantity" value="<?php echo $row_pro['quantity']?>" class="form-control" id="exampleInputEmail1"  placeholder="quantity">
  </div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">description</label>
    <input type="text" name="description" value="<?php echo $row_pro['description']?>" class="form-control" id="exampleInputEmail1" placeholder="description" >
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>
