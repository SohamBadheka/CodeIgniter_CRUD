
<h1><center>These are the Subcategories!</center></h1><hr>
<h1><center><?php echo anchor("subcat_controller/add", 'Add a Subcat !');?></center></h1><hr>
<?php if(isset($records)) : foreach($records as $row) : ?>



	<h2><?php echo $row->name; ?></h2>
	<?php echo anchor("subcat_controller/delete/$row->sub_cat_id", 'delete'); ?>
	<?php echo anchor("subcat_controller/update/$row->sub_cat_id", 'update'); ?>
	
<?php endforeach; ?>

<?php else : ?>
	<h1>nothingh to shoe</h1>
<?php endif; ?>