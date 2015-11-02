<?php if(isset($records)) : foreach($records as $row) : ?>

	<h2><?php echo anchor("start/delete/$row->cat_id", $row->name); ?></h2>
	<p><?php echo $row->logo; ?></p>
<?php endforeach; ?>

<?php else : ?>
	<h1>nothingh to shoe</h1>
<?php endif; ?>

