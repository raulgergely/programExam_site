<?php
include("conectare.php");
session_start();

if(isset($_POST['enter']))//verif daca enter a fost apasat
{
$nume=$_POST['nume'];//retinere nume
$parola=$_POST['parola'];//retinere parola
$par=$parola;
$parola=md5($parola);//criptare parola
if(isset($nume) and isset($parola))//verificare ca nume si parola sa nu fie goale
{
	if(strlen($par)>5)//parola mai lunga de 5 caractere
	{
		$sql="SELECT * FROM  utilizatori WHERE nume='$nume' AND parola='$parola'";//verificare combinatie nume parola corecta
		$rezultat=mysqli_query($conn,$sql);//verificare baza de date
		$lini=mysqli_num_rows($rezultat);
		if ($lini==1)//verificare o singura combinatie corecta de nume &parola
		{
			$_SESSION['utilizator']=$nume;
	
			header('Location:examene.php');//redirectionare catre examene .php conectare reusita
		}
		else
		
			header('Location:index.php?e=1');//redirectioneaza conectare nereusita
	}
	else
	
		header('Location:index.php?e=1');//redirectioneaza conectare nereusita
}
}
?>