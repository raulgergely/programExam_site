
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPT Examene</title>
<link rel="shortcut icon"  href="upt.gif" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/afisare.css" rel="stylesheet" type="text/css" media="all" />
<style>

</style>
</head>
<body>

<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li ><a href="index.php">Logare</a></li>
				<li><a href="examene.php">Formular</a></li>
				<li  class="current_page_item"><a href="afisare_examene.php">Examene</a></li>
			</ul>
		</div>
		<!-- end #menu --> 

	</div>
	
	<div id="page" class="container" >
	
<h1 style="font-size:35px;font-family:Verdana;text-shadow: 3px 3px #000;color:#16a085;margin-bottom:5%;text-align:center;">

Examene programate </h1>
<?php
include("conectare.php");
session_start();

error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION['utilizator']))
{
echo "<h1>Daca vrei sa vezi aceasta pagina te rog sa te loghezi <a href='index.php'>aici</a>!</h1>";
}
else{
//obtinere informati din verificare examene
		$tip_examen=$_SESSION['tip_examen'];
		$durata_examen=$_SESSION['durata_examen'];
		$select=$_SESSION['nr_materie'];
		$nume_materie=$_SESSION['materie'];
		$profesor=$_SESSION['profesor'];
		$data=$_SESSION['data'];
		$prezentare=$_SESSION['prezentare'];
		$an=$_SESSION['an'];
		$getsala=$_GET['w'];
		if($getsala==1)
			$sala=$_POST['salaLiberaNoua'];
		else 
			$sala=$_SESSION['sala'];
		$ora=$_SESSION['ora'];
		$x=$_SESSION['ora_int'];	
//error_reporting(E_ERROR | E_PARSE);
$va=$_GET['a'];
if($va==1)//verif daca utiliz vine de pe examene.php
{
$orafinal=$ora+$durata_examen;
//inserare in bd totul este in regula
$sql="insert into examene (id_materie,nume_profesor,data_examen,ora_examen,prezentare,tip_examen,durata_examen,sala) VALUES 
							('$select','$profesor[0]','$data','$ora','$prezentare','$tip_examen','$durata_examen','$sala')";							
$sqlSala="insert into sali (Sala,Data,Ora,Ora_sfarsit,Standard) VALUES ('$sala','$data','$ora','$orafinal','1')";
$rezultat = mysqli_query($conn,$sql) or die("Error: ". mysqli_error($conn). " with query ");
$rezultatSala= mysqli_query($conn,$sqlSala) or die("Error: ". mysqli_error($conn). " with query ");
}			

?>

	<?php 
	//afisare table
	echo '<div style="align:center";>
<table style="color:dark";>
<tr> 
<th style="align:center;"> Materie </th>
<th style="align:center;"> Cadru didactic </th>
<th style="align:center;"> Data examen </th>
<th style="align:center;"> Ora examen</th>
<th style="align:center;"> Durata </th>
<th style="align:center;"> Sala </th>
<th style="align:center;"> Tip examen </th>
<th style="align:center;"> Prezentare </th>

</tr>';
 $sql2="select * from examene where 1";
$rezultat2=mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn). " with query ");
//vector materii
$materii=array("Analiza Matematica","Algebra si Geometrie","Fizica","Programarea Calculatoarelor"
,"Fundamente de Inginerie Mecanica si Robotica","Logica si Structuri Discrete","Limba Engleza",
"Limba Franceza","Limba Germana","","Matematici asistate de Calculator","Matematici Speciale",
"Fundamente de Inginerie Electrica","Fundamente de Inginerie Electronica ","Tehnici de Programare",
"Logica Digitala","Limba Engleza 2","Linba Franceza 2","Limba Germana 2");
if($rezultat2){
while ($row=mysqli_fetch_array($rezultat2)) {
	//echo $row["id_materie"]." ".$row["nume_profesor"];
$sqlMaterie="SELECT materie from `materii` WHERE `id`=1";
$rezultatMaterie=mysqli_query($conn,$sqlMaterie) ;
$r = mysqli_fetch_array($rezultatMaterie) ;
$v=$row["id_materie"];
$v2=$v-1 ;
echo'<tr> <td>'; /*echo $row["id_materie"];*/echo $materii[$v2]; echo '</td>';

echo'<td>';  echo $row["nume_profesor"]; 

echo'</td>';
echo '<td style="align:center;">';  echo $row["data_examen"]; echo'</td>';
echo '<td style="align:center;">';  echo substr($row["ora_examen"], 0, -3); echo'</td>';//liitare la ora si minut
echo '<td style="align:center;">';  echo $row["durata_examen"];echo 'h </td>';
echo '<td style="align:center;">'; echo $row["sala"]; echo'</td>';
echo '<td style="align:center;">';  if($row["tip_examen"]==1)echo "Partial";else if($row["tip_examen"]==2)echo "Distribuita";else if($row["tip_examen"]==3)echo "Examen";else echo "Restanta";echo'</td>';
echo '<td style="align:center;">'; echo $row["prezentare"]; echo'</td>';
echo '</tr>';



}
}
}
	?>
	
</table>


</div>

</div>

<!--
		<div id="sidebar">
			<div class="box2">
				<div class="title">
					<h2>Integer gravida</h2>
				</div>
				<ul class="style2">
					<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
					<li><a href="#">Ornare in hendrerit in lectus</a></li>
					<li><a href="#">Semper mod quis eget mi dolore</a></li>
					<li><a href="#">Quam turpis feugiat sit dolor</a></li>
					<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
					<li><a href="#">Quam turpis feugiat sit dolor</a></li>
					<li><a href="#">Consequat etiam lorem phasellus</a></li>
				</ul>
			</div> -->
		</div>
	</div>
</div>
	
<div id="footer-wrapper">
	<div id="footer" class="container">
	<a style="color:white;"href="http://www.ac.upt.ro">Universitatea Politehnica Timisoara</a> 
		
		</div>
	</div>
	
		</div>
	</div>
</div>
</body>
</html>
