<?php
if(isset($_SESSION['utilizator']))
{	unset($_SESSION['utilizator']);
	header('Location: index.php');
}
else
header('Location: index.php');
	
	
?>