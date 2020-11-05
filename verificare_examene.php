
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

<style>
th {
	background-color:#16a085;color:dark;
}
td {
	border:1px solid black;
}
table {
	background-color:#eee;border-collapse:collapse;
	margin-left:auto;
	margin-right:auto;
}
th,td {
	padding:5px;border:1px solid #000;
}

 Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
 width:50%;
 
 float:right;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color:  #16a085;
 
 cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;

  background: #737373;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color:  #16a085;
}
#aaa{
	color:#fff;
}
</style>
</head>
<body>

<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li ><a href="index.php">Logare</a></li>
				<li><a href="examene.php">Formular</a></li>
				<li  class="current_page_item"><a href="verificare_examene.php">Examene</a></li>
			</ul>
		</div>
		<!-- end #menu --> 

	</div>
	
	<div id="page" class="container" >
	<div style="width:100%;height:100%;">
<?php
include("conectare.php");
session_start();

error_reporting(E_ERROR | E_PARSE);
			$var=$_GET['i'];
			//verificam daca am ajuns pe aceasta pagina de pe examene.php
				if($var==1){
					//obtinere informatii din formulare examene
$tip_examen=$_POST['examen'];
$durata_examen=$_POST['durata'];
$select=$_POST['materii'];
$profesor=$_POST['profesor'];
$data=$_POST['data'];
$prezentare=$_POST['prezentare'];
$an=$_POST['selectare_an'];
$sala=$_POST['sala'];
$ora=$_POST['ora'];
$x = (float) preg_replace('/^(\d+):(\d+).+/','\1.\2',$ora);

$sqlmat1="Select  materie from materii where id='$select' ";//obtinem id materiei;
$rezultatdata11=mysqli_query($conn,$sqlmat1) or die("Error: ". mysqli_error($conn). " with query ");
$row = mysqli_fetch_assoc($rezultatdata11);
$_SESSION['materie']=$row['materie'];//cream var pt verificare_examene
$_SESSION['nr_materie']=$select;
$ora_f=$x+$durata_examen;
$sqldata="Select * from sali where sala='$sala' AND data='$data' AND (Ora='$x' OR (Ora < '$ora_f' ))";//verificam daca sala e ocupata pt examren
//verif sala ocupata ora incepere  ^
$rezultatdata=mysqli_query($conn,$sqldata) or die("Error: ". mysqli_error($conn). " with query ");
$linidata=mysqli_num_rows($rezultatdata);
$q=0;
$qsali=array();
	if($linidata>=1)//daca da sala e ocupata
	{
		echo "<h2>In data de $data la ora $ora sala $sala este ocupata! </h2>";
		 $vectorSala=array("D1","A101","A106","ASPC","A117","A109","A204","A115","A110","SPM202","SPM205","303-Chimie");
		for($i=0;$i<count($vectorSala);$i++)
		{
			if($vectorSala[$i]!=$sala){
			$ora_sf=$x+$durata_examen;
			$sqlSalaLiber="SELECT * FROM sali  where sala='$vectorSala[$i]' AND Ora BETWEEN '$x' AND '$ora_sf'";
			$rez=mysqli_query($conn,$sqlSalaLiber);
			$linirez=mysqli_num_rows($rez);	
			if($linirez==0)
			{
				$q++;
				$qsali[$q]=$vectorSala[$i];//cream un vector cu sali libere;
			}
			
		}
		}
		if($q>0)
		{	
	$materii=array("Analiza Matematica","Algebra si Geometrie","Fizica","Programarea Calculatoarelor"
,"Fundamente de Inginerie Mecanica si Robotica","Logica si Structuri Discrete","Limba Engleza",
"Limba Franceza","Limba Germana","","Matematici asistate de Calculator","Matematici Speciale",
"Fundamente de Inginerie Electrica","Fundamente de Inginerie Electronica ","Tehnici de Programare",
"Logica Digitala","Limba Engleza 2","Linba Franceza 2","Limba Germana 2");//se creaza un vector cu toate materiile existente;

	echo "<h2>Pentru sustinerea examenului de ".$materii[($select-1)]." din data de $data de la ora $ora cu o durata de $durata_examen ore s-au 
	gasit urmatoarele sali libere :</h2>";//pentru afisarea materiei la care se da examenul se va trece vectorul cu indicele materie -1 
	//deoarece vectorul are indici de la 0 iar $select ia valori de la 1;
			echo "<form action='afisare_examene.php?a=1&w=1' method='POST'>";
		echo "<select name='salaLiberaNoua' style='margin-left:47%;margin-top:5%;'>";//select cu sali libere
		
		for($q=1;$q<=count($qsali);$q++)
		{
			echo "<option value=".$qsali[$q].">".$qsali[$q]."</option>";
		}
		echo "</select><br>";
		//restul de informatii pt afis examene
		$_SESSION['tip_examen']=$tip_examen;
		$_SESSION['durata_examen']=$durata_examen;
		$_SESSION['profesor']=$profesor;
		$_SESSION['data']=$data;
		$_SESSION['prezentare']=$prezentare;
		$_SESSION['an']=$an;
		$_SESSION['ora']=$ora;
		$_SESSION['ora_int']=$x;echo "<br>";
		echo "<button type='submit' name='submit' value='someValue' style='margin-top:3%;width:20%;height:5%;background-color:#16a085;margin-left:40%;border-radius:20px;
		border: 2px solid #000;font-family:Verdana; ' >Confirma</button";

		echo "</form>";
		
		}
	}
	else
	{
		//sala este libera
		echo "<h2 style='text-align:center;'>Sala $sala este libera de la ora $ora.Planifici examenul ? </h2>";
		//trimitem informati pt afisare examene
		$_SESSION['tip_examen']=$tip_examen;
		$_SESSION['durata_examen']=$durata_examen;
		$_SESSION['profesor']=$profesor;
		$_SESSION['data']=$data;
		$_SESSION['prezentare']=$prezentare;
		$_SESSION['an']=$an;
		$_SESSION['sala']=$sala;
		$_SESSION['ora']=$ora;
		$_SESSION['ora_int']=$x;
		echo "<a style='float:left;' href='afisare_examene.php?a=1'><img style='width:70%;' src='img/Da.png'/></a>";
		echo "<a style='float:right;' href='examene.php?ex=0'><img style='width:70%;' src='img/nu.png'/></a>";
	}

}
?>

</div>
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
