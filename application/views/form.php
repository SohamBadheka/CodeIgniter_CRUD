<html>

<body>
<div id="form">
<?php echo form_open("script/login"); ?>


<p>Name:<input type="text" name="name" id="name">

Email :<input type="password" name="password" id="pass">
<?php echo form_submit('submit','Sbmit'); ?>
<?php echo form_close(); ?>

<?php echo validation_errors(); ?>
</div>

</body>
</html> 
