
<h1><center>These are the categories!</center></h1><hr>
<h1><center><?php echo anchor("category_controller/add", 'Add a cat');?></center></h1><hr>

<?php if(isset($records)) : foreach($records as $row) : ?>

	
	<h2><?php echo $row->name; ?></h2>
	<?php echo anchor("category_controller/delete/$row->cat_id", 'delete'); ?>
	<?php echo anchor("category_controller/update/$row->cat_id", 'update'); ?>
	
<?php endforeach; ?>

<?php else : ?>
	<h1>nothingh to shoe</h1>
<?php endif; ?>