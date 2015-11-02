<html>
<?php
$this->load->helper('html');
echo link_tag('css/bootstrap.css'); 
echo link_tag('css/bootstrap.min.css'); 
?>

<body>
	<h1><center>Welcome to the dashboard !</center></h1>
<hr>
<h2><center><?php echo anchor("category_controller/show", 'Categories'); ?></center></h2>

<h2><center><?php echo anchor("subcat_controller/show", 'Subcategories'); ?></center></h2>
<h2><center><?php echo anchor("business_controller/show", 'Business'); ?></center></h2>




</body>
</html>