<?php
$id = $_GET['id'];
$select_edit = $connect -> query("SELECT * FROM blog WHERE id = '$id'");
$row_edit = $select_edit -> fetch_assoc();
?>
<form method="post" action="functions/postedit.php">
<input type="hidden" name="id" value="<?php echo$id?>" class="form-control" id="exampleInputEmail1">

<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="<?php echo$row_edit['name'] ?>" class="form-control" id="exampleInputEmail1">
</div>
    <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
    <input type="text" name="Subject" value="<?php echo$row_edit['subject'] ?>" class="form-control" id="exampleInputEmail1" >
  </div>
<div id="sample" class="form-group">
<label for="exampleInputEmail1">Write Post</label>
    <textarea name="post" style="width: 100%;" rows="15" >     
    <?php echo$row_edit['post'] ?>
    </textarea>                                    
</div>

  <input type="submit" name="submit" class="btn btn-primary" value="Submit">

</form>
