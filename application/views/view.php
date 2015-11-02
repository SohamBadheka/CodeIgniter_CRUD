<html>

<body>


<h1>I say fuck you like a dynamite !!!</h1>

<br>


<?php


foreach ($records as $row){ ?>

<h2><?php echo $row->title; ?></h2>
	<p> <?php echo $row->text ?> </p>
	<?php } ?>


</html> 
</body>