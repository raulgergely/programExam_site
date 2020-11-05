<?php

        include('conectare.php');
        $matematica=0;
        $sqlMate="SELECT * from departament where Departament='MATEMATICA'";//se obtine informatile despre profesori din departament Fizica
        $rezultatMate=mysqli_query($conn,$sqlMate) or die("Error: ".mysqli_error($conn). " with query ");
        if($rezultatMate)//daca exista cel putin un rezultat
        {
            while ($row=mysqli_fetch_array($rezultatMate)) //toata informatile se trec pe rand in $row
            {
                $mate[$matematica]=$row['Cadru_didactic'];//in vector se trece numele profesorului
                $matematica++;//apoi crestem indicele
            }
        }
        $fizica=0;
        $sqlfiz="SELECT * from departament where Departament='FIZICA'";//se obtine informatile despre profesori din departament Fizica
        $rezultatFiz=mysqli_query($conn,$sqlfiz) or die("Error: ".mysqli_error($conn). " with query ");
        if($rezultatFiz)//daca exista cel putin un rezultat
        {
            while ($row=mysqli_fetch_array($rezultatFiz)) //toata informatile se trec pe rand in $row
            {
                $fiz[$fizica]=$row['Cadru_didactic'];//in vector se trece numele profesorului
                $fizica++;//apoi crestem indicele
            }
        }
        
        $aiaContor=0;
        $sqlaia="SELECT * from departament where Departament='AIA'";//se obtine informatile despre profesori din departament AIA
        $rezultatAia=mysqli_query($conn,$sqlaia) or die("Error: ".mysqli_error($conn). " with query ");
        if($rezultatAia)//daca exista cel putin un rezultat
        {
            while ($row=mysqli_fetch_array($rezultatAia)) //toata informatile se trec pe rand in $row
            {
                $aia[$aiaContor]=$row['Cadru_didactic'];//in vector se trece numele profesorului
                $aiaContor++;//apoi crestem indicele
            }
        }
        $straineContor=0;
        $sqlStraine="SELECT * from departament where Departament='LIMBI STRAINE'";//se obtine informatile despre profesori din departament LIMBI STRAINE
        $rezultatStraine=mysqli_query($conn,$sqlStraine) or die("Error: ".mysqli_error($conn). " with query ");
        if($rezultatStraine)//daca exista cel putin un rezultat
        {
            while ($row=mysqli_fetch_array($rezultatStraine)) //toata informatile se trec pe rand in $row
            {
                $straine[$straineContor]=$row['Cadru_didactic'];//in vector se trece numele profesorului
                $straineContor++;//apoi crestem indicele
            }
        }
        $mecanicaContor=0;
        $sqlMecanica="SELECT * from departament where Departament='MECANICA'";//se obtine informatile despre profesori din departament MECANICA
        $rezultatMecanica=mysqli_query($conn,$sqlMecanica) or die("Error: ".mysqli_error($conn). " with query ");
        if($rezultatMecanica)//daca exista cel putin un rezultat
        {
            while ($row=mysqli_fetch_array($rezultatMecanica)) //toata informatile se trec pe rand in $row
            {
                $mecanica[$mecanicaContor]=$row['Cadru_didactic'];//in vector se trece numele profesorului
                $mecanicaContor++;//apoi crestem indicele
            }
        }
        $opticaContor=0;
        $sqlOptica="SELECT * from departament where Departament='MASURARI SI ELECTRONICA OPTICA'";//se obtine informatile despre profesori din departament MECANICA
        $rezultatOptica=mysqli_query($conn,$sqlOptica) or die("Error: ".mysqli_error($conn). " with query ");
        if($rezultatOptica)//daca exista cel putin un rezultat
        {
            while ($row=mysqli_fetch_array($rezultatOptica)) //toata informatile se trec pe rand in $row
            {
                $optica[$opticaContor]=$row['Cadru_didactic'];//in vector se trece numele profesorului
                $opticaContor++;//apoi crestem indicele
            }
        }
        



?>