<html>
<body>
	<h1><center>Add categories here !</center></h1>
<hr>


<?php echo form_open("category_controller/add_cat"); ?>

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