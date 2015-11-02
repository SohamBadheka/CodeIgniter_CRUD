<html>
<body>
	<h1><center>Add Subcategories here !</center></h1>
<hr>


<?php echo form_open("subcat_controller/add_subcat"); ?>


Category id:

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

</select> <br><br>
Category name:
<p>
<input type="text" name="name" id="name">
</p>

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