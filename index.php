
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPT Examene</title>
<link rel="shortcut icon"  href="upt.gif" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
	
		<div id="menu" class="container">
		<ul>
				<li class="current_page_item"><a href="index.php">Logare</a></li>
				<li><a href="examene.php">Formular</a></li>
				<li><a href="afisare_examene.php">Examene</a></li>
				
			</ul>
		</div>
	<?php
	error_reporting(E_ERROR | E_PARSE);
			$var=$_GET['e'];
	
	?>
	</div>
		<div>
			
		</div>
	<div id="page" class="container" >
		<div  style="margin-left:20%;margin-right:20%;">
	<h1 style="font-size:35px;font-family:Verdana;text-shadow: 3px 3px #000;color:#16a085;top:5%;margin-right:20%;margin-left:20%;margin-bottom:10%;text-align:center;">Autentificare <?php
			
			//verificam daca cumva retransmiterea de pe logare.php nu a functionat.si a dat eroare
				if($var==1)
					echo " <p style='color:red;'>nereusita</p>";
			?></h1>
<form style="border: solid black 2px;position:static;box-sizing: border-box;background: white;margin-right:25%;margin-left:25%;
padding-bottom:2%;"  action="logare.php" method="POST">
 <input style="width:60%;margin: 8px 0;box-sizing: border-box;margin-bottom:2%;margin-left:20%;margin-top:4%;" type="text" name="nume"placeholder="Utilizator" />  <br>
 <br><input style="width:60%;margin-left:20%;margin-bottom:5%;" type="password" name="parola" placeholder="Parola"/><br>
<button style="width:40%;height:5%;background-color:#16a085;margin-left:30%;border: 2px solid #000;font-family:Verdana; "type="submit" 
name="enter" value="enter"><h3 style="color:white;webkit-text-stroke: 10px black;">Logare</h3></button>

</form>
</div>
</div>
		</div>
	</div>
</div>
	

<div id="footer-wrapper">
	<div id="footer" class="container">
	<a style="color:white;"href="http://www.ac.upt.ro">Universitatea Politehnica Timisoara</a> 
		
		</div>
	</div>
</div>
</body>
</html>
