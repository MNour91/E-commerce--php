<?php
$pro_active = "add";
?>
<form method="post" action="functions/product_add.php" style="width: 90%; margin:auto;" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name product</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="enter Name product">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="number"  name="price"  class="form-control" id="exampleInputEmail1" placeholder="enter price">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">seller</label>
    <input type="text" name="seller" value="" class="form-control" id="exampleInputEmail1" placeholder="seller">
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">discount</label>
    <input type="number" name="discount" value="" class="form-control" id="exampleInputEmail1" placeholder="discount">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="file"  name="main_image" id="inlineRadio1"  >
  <label class="form-check-label" for="inlineRadio1">main_image</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="file" name="files[]" id="inlineRadio2" multiple>
  <label class="form-check-label" for="inlineRadio2">other_images</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> quantity</label>
    <input type="number" name="quantity" value="" class="form-control" id="exampleInputEmail1"  placeholder="quantity">
  </div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">description</label>
    <input type="text" name="description" value="" class="form-control" id="exampleInputEmail1" placeholder="description" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type Products</label>
    <select name="type_product" class="form-control" id="exampleFormControlSelect1">
      <option value="1" >Electronics</option>
      <option value="2" >Fashion</option>
      <option value="3" >computers</option>    
      <option value="4" >Toys,Games</option>    
      <option value="5" >books</option>   
      <option value="6" >Home & furniture</option>
      <option value="7" >Mobile Phones</option>
       
    </select>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>
