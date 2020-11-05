
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Examene</title>
<link rel="shortcut icon"  href="upt.gif" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/examene.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body >
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li ><a href="index.php">Logare</a></li>
				<li class="current_page_item"><a href="examene.php">Formular</a></li>
				<li><a href="afisare_examene.php">Examene</a></li>
				
			</ul>
		</div>
	</div>
	<?php
			
	include('conectare.php');
    session_start();
    
   include("initializationTeachers.php");
	?>
	<div id="page" class="container"  >
	
	<?php  if(!isset($_SESSION['utilizator']))
	//verif daca utiliz nu e logat
	{
		echo "<h1>Daca vrei sa vezi aceasta pagina te rog sa te loghezi <a href='index.php'>aici</a>!</h1>";
	}	
	else
	{
	?>
	<h1 style="text-align:center;margin-bottom:3%;margin-top:-3%;font-size:35px;font-family:Verdana;text-shadow: 3px 3px #000;color:#16a085;">Programare examen:</h1>
		<div   style="background: #16a085;border: solid black 5px;border-radius:35px;margin-left:20%;margin-right:20%;">	
	<ul >
<form action="verificare_examene.php?i=1" method="post" id="demoForm" class="demoForm" style="padding-top:5%;padding-right:5%;padding-bottom:2%;">
<li style="margin-bottom:2%;"><label style="float:left;color:white;">
Serie</label><div class="select" style="width:-10%;"><select style="float:right;" name="category">
    <option value="is">IS</option>
    <option value="cti">CTI</option>
    <option value="cti_e">CTI engleza</option> 
	
    <option value="info">INFO</option> 
</select></div><br></li>
<li><label style="float:left;color:white;">An</label>
<div class="select">
<select name="selectare_an" style="float:right;" >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option> 
	
    <option value="4">4</option> 
</select></div><br></li>
<br>
<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Semestru</label><div class="select"> <select style="float:right;" name="semestru">
<option value="unul"> 1 </option>
<option value="doi"> 2 </option> </select> </div><br>  </li>
<li  style="margin-bottom:2%;"> <label style="float:left;color:white;">Tip Examen </label><div class="select"><select style="float:right;" name="examen"> 
<option value="1"> Partial </option>
<option value="2"> Distribuita </option>
<option value="3"> Examen </option>
<option value="4"> Restanta </option> 
</select> </div><br></li>
<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Prezentare </label><div class="select"><select style="float:right;"name="prezentare">  
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
</select></div> <br> </li>

<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Disciplina </label><div class="select"><select style="float:right;" name="materii">
<optgroup id="aaa"label="Semestrul 1" style="background:#fff;">
<option value="1"> Analiza Matematica </option>
<option value="2"> Algebra si Geometrie </option>
<option value="3"> Fizica </option>
<option value="4"> Programarea Calculatoarelor </option>
<option value="5"> Fundamente de inginerie Mecanica si Robotica </option>
<option value="6"> Logica si Structuri Discrete </option>
<option value="7"> Limba Engleza </option>
<option value="8"> Limba Franceza </option>
<option value="9"> Limba Germana </option>
</optgroup>
<optgroup label="Semestrul 2">
<option value="11"> Matematici asistate de Calculator </option>
<option value="12"> Matematici Speciale </option>
<option value="13"> Fundamente de Inginerie Electrica </option>
<option value="14"> Fundamente de Inginerie Electronica </option>
<option value="15"> Tehnici de Programare </option>
<option value="16"> Logica Digitala </option>
<option value="17"> Limba Engleza2 </option>
<option value="18"> Limba Franceza2 </option>
<option value="19"> Limba Germana2 </option>
</optgroup>
</select></div><br/> </li>
<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Nume profesor </label><div class="select"><select style="float:right;" name="profesor[]" ></select> </div><br/> </li>
<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Data</label> <input style="float:right;border-radius:10px;margin-right:15%;" type="date" name="data" min=<?php echo date('Y-m-d'); ?> max="2035-08-20">
 </br> </li>

<li style="margin-bottom:2%;"><label style="float:left;color:white;">Ora</label><input style="float:right;border-radius:10px;margin-right:16%;" type="time" name="ora"><br></li>
<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Durata examen</label><div class="select"> <select style="float:right;" name="durata">
<option value="1"> 1h </option>
<option value="2"> 2h </option>
<option value="3"> 3h </option>
<option value="4"> 4h </option> </select> </div><br> </li>
<li style="margin-bottom:2%;"> <label style="float:left;color:white;">Sala</label><div class="select"><select style="float:right;" name="sala"> 
<option value="D1"> D1 </option>
<option value="A101"> A101 </option>
<option value="A106"> A106 </option>
<option value="ASPC"> ASPC </option>
<option value="A117"> A117 </option>
<option value="A109"> A109 </option>
<option value="A204"> A204 </option>
<option value="A115"> A115 </option>
<option value="A110"> A110 </option>
<option value="SPM202"> SPM202 </option>
<option value="SPM205"> SPM205 </option>
<option value="303-Chimie"> 303-Chimie </option>
</select></div></br> </li>

<li style="padding-top:2%;">
<input  style="width:30%;align:center;margin-left:38%;"type="image" src="img/trimite.png" value="Trimite"></li>
</form>
</ul>
</div>
<script type="text/javascript" >
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['demoForm'].elements['materii'].onchange = function(e) {
    // name of associated select list
    var relName = 'profesor[]';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements

	var Select_List_Data = {
    
    // name of associated select list
    'profesor[]': {
        
        // names match option values in controlling select list   
            // optgroup label
			1: {
                text: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>],
			value: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>]
        },
		2: {
                text: [<?php for($k=0;$k<$matematica;$k++) echo "'".$mate[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>]
        },
		3: {
                text: [<?php for($k=0;$k<$fizica;$k++) echo "'".$fiz[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$fizica;$k++) {$e=$fiz[$k];echo "'".$e."',";} ?>]
        },
		4: {
                text: [<?php for($k=0;$k<$aiaContor;$k++) echo "'".$aia[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$aiaContor;$k++) {$e=$aia[$k];echo "'".$e."',";} ?>]
        },
		5: {
                text: [<?php for($k=0;$k<$mecanicaContor;$k++) echo "'".$mecanica[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$mecanicaContor;$k++) {$e=$mecanica[$k];echo "'".$e."',";} ?>]
        },
		6: {
                text: [<?php for($k=0;$k<$aiaContor;$k++) echo "'".$aia[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$aiaContor;$k++) {$e=$aia[$k];echo "'".$e."',";} ?>]
        },
		7: {
                text: [<?php for($k=0;$k<$straineContor;$k++) echo "'".$straine[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$straineContor;$k++) {$e=$straine[$k];echo "'".$e."',";} ?>]
        },
		8: {
                text: [<?php for($k=0;$k<$straineContor;$k++) echo "'".$straine[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$straineContor;$k++) {$e=$straine[$k];echo "'".$e."',";} ?>]
        },
		9: {
                text: [<?php for($k=0;$k<$straineContor;$k++) echo "'".$straine[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$straineContor;$k++) {$e=$straine[$k];echo "'".$e."',";} ?>]
        },
		11: {
                text: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>],
			value: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>]
        },
		12: {
                text: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>],
			value: [<?php for($k=0;$k<$matematica;$k++) {$e=$mate[$k];echo "'".$e."',";} ?>]
        },
		13: {
                text: [<?php for($k=0;$k<$fizica;$k++) echo "'".$fiz[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$fizica;$k++) {$e=$fiz[$k];echo "'".$e."',";} ?>]
        },
		14: {
                text: [<?php for($k=0;$k<$fizica;$k++) echo "'".$fiz[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$fizica;$k++) {$e=$fiz[$k];echo "'".$e."',";} ?>]
        },
		15: {
                text: [<?php for($k=0;$k<$aiaContor;$k++) echo "'".$aia[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$aiaContor;$k++) {$e=$aia[$k];echo "'".$e."',";} ?>]
        },
		16: {
                text: [<?php for($k=0;$k<$aiaContor;$k++) echo "'".$aia[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$aiaContor;$k++) {$e=$aia[$k];echo "'".$e."',";} ?>]
        },
		17: {
                text: [<?php for($k=0;$k<$straineContor;$k++) echo "'".$straine[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$straineContor;$k++) {$e=$straine[$k];echo "'".$e."',";} ?>]
        },
		18: {
                text: [<?php for($k=0;$k<$straineContor;$k++) echo "'".$straine[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$straineContor;$k++) {$e=$straine[$k];echo "'".$e."',";} ?>]
        },
		19: {
                text: [<?php for($k=0;$k<$straineContor;$k++) echo "'".$straine[$k]."',"; ?>],
                value: [<?php for($k=0;$k<$straineContor;$k++) {$e=$straine[$k];echo "'".$e."',";} ?>]
        },
		
    }
    
};
// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['demoForm'];
    
    // reference to controlling select list
    var sel = form.elements['materii'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'profesor[]';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

</script>
<?php
	}
?>
</div>

		<div id="footer-wrapper">
	<div id="footer" class="container">
	<a style="color:white;"href="http://www.ac.upt.ro">Universitatea Politehnica Timisoara</a> 
		
		</div>
	</div>
		
	</div>
</div>

</body>
</html>
