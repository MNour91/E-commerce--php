<form method="post" action="functions/post_add.php" enctype="multipart/form-data">
  <div class="form-group">

    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1">
 
    <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" name="Subject" value="" class="form-control" id="exampleInputEmail1" >
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">img</label>
    <input type="file" name="img" value="" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">keywords</label>
    <select name="keywords" class="form-control" id="exampleFormControlSelect1">
      <option value="1" >Electronics</option>
      <option value="2" >Fashion</option>
      <option value="3" >computers</option>    
      <option value="4" >Toys,Games</option>    
      <option value="5" >books</option>   
      <option value="6" >Home & furniture</option>
      <option value="7" >Mobile Phones</option>
       
    </select>
  </div>

<div id="sample" class="form-group">
<label for="exampleInputEmail1">Write Post</label>
    <textarea name="post" style="width: 100%;" rows="12" >     
         
    </textarea>                                    
</div>

  <input type="submit" name="submit" class="btn btn-primary" value="Submit">

</form>



