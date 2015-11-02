<html>
<body>
	<h1><center>Update the business !</center></h1>
<hr>

<?php $id=$this->uri->segment(3); ?>
<?php echo form_open("business_controller/update_business/$id"); ?>

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