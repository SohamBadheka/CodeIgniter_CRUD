
<h1><center>These are the Business!</center></h1><hr>
<h1><center><?php echo anchor("business_controller/add", 'Add a Business !');?></center></h1><hr>

<?php if(isset($records)) : foreach($records as $row) : ?>

	
	<h2><?php echo $row->name; ?></h2>
	<?php echo anchor("business_controller/delete/$row->business_id", 'delete'); ?>
	<?php echo anchor("business_controller/update/$row->business_id", 'update'); ?>
	
<?php endforeach; ?>

<?php else : ?>
	<h1>nothingh to shoe</h1>
<?php endif; ?>