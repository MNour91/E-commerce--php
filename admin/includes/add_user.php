<form method="post" action="functions/user_add.php" style="width: 90%; margin:auto;">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Enter password">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" >
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number" name="phone" value="" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="" class="form-control" id="exampleInputEmail1" >
  </div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
      <option value="0" >Owner</option>
      <option value="1" >Admin</option>
      <option value="2" >editor</option>
      <option value="3" >Supervisor</option>    
    </select>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>
