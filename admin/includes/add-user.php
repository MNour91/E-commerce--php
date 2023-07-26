<form  style="width: 90%; margin:auto;" class="form_user">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text"  value="" class="form-control fullname" id="exampleInputEmail1" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password"   class="form-control password" id="exampleInputEmail1" placeholder="Enter password" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  value="" class="form-control email" id="exampleInputEmail1" required>
    <div class="check"></div>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number"  value="" class="form-control phone" id="exampleInputEmail1" required>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input gender" type="radio"  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" value="" class="form-control address" id="exampleInputEmail1" required>
  </div>
<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="priv" class="form-control priv" id="exampleFormControlSelect1"required>
      <option value="0" >Owner</option>
      <option value="1" >Admin</option>
      <option value="2" >editor</option>
      <option value="3" >Supervisor</option>    
    </select>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>
