<html>
<body>
	<h1><center>Update the Subcat here !</center></h1>
<hr>

<?php $id=$this->uri->segment(3) ?>
<?php echo form_open("subcat_controller/update_subcat/$id"); ?>

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

 
</body>
</html>