<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Entering user data</title>

<head>

<body>

<h1>Entering user data</h1>

<?php echo $this->validation->error_string;?>

<?php echo form_open('validator');?>

<p>First Name <input type="text" name="firstname" value="" size="50" /></p>

<p>Last Name <input type="text" name="lastname" value="" size="50" /></p>

<p>Email <input type="text" name="email" value="" size="50" /></p>

<p><input type="submit" value="Send Data" /></p>

</form>

</body>

</html>

Read more at http://www.devshed.com/c/a/PHP/Validating-Web-Forms-with-the-Code-Igniter-PHP-Framework/2/#tHYOGhld1sVKguAK.99