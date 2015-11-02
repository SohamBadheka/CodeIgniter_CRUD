

<html>
<body>
	<h1><center>Add business here !</center></h1>
<hr>


<?php echo form_open("business_controller/add_cat"); ?>

Name:
<p>
<input type="text" name="name" id="name">
</p>

Address:
<p>
<input type="text" name="address">
</p>

Contact:
<p>
<input type="text" name="Contact">
</p>

Email:
<p>
<input type="email" name="Email">
</p>

Website:
<p>
<input type="text" name="Website">
</p>


Plan:
<p>
<input type="text" name="">
</p>

timings:
<p>
<input type="text" name="">
</p>

Latitude:
<p>
<input type="text" name="lat">
</p>

Longitude:
<p>
<input type="text" name="long">
</p>

Cat ID:
 <select name="catid">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>

</select>

SubCat ID:
 <select name="subcatid">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>

</select>
<br>
Logo:
<p>
<input type="text" name="logo" id="logo">
</p>

<p>
<input type="submit" value="Submit">
</p>

<?php form_close();?> 

<hr>
</body>
</html>