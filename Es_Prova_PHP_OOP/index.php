<?php
    header("Content-Type: application/json");
    require_once 'Indirizzo.php';
    require_once 'Voto.php';
    require_once 'Alunno.php';
    

    //serializzazione json
    // $alunni = [];
    // $alunno1 = new Alunno("Giacomo", "Petrini", "18");
    // $alunno2 = new Alunno("Yuri", "Viligiardi", "3");
    // $alunno3 = new Alunno("Cosimella", "Ballerella", "1");
    // $alunno4 = new Alunno("Matteo", "Ciaschy", "0");

    // $alunni = [$alunno1, $alunno2, $alunno3, $alunno4];
    // $json= json_encode($alunni);

    // echo"<div class='div'";
    // foreach ($alunni as $alunno) {
    //     $alunno->stampaAttributi();
    // }
    // echo"</div";
    
    $josn = file_get_contents("alunni.json");

    //deserializzazione json
    $alunni2 = json_decode($json, true);
    $alunni2 = [];
    foreach($alunni2 as $stud){
        $a = new Alunno($stud['nome'], $stud['cognome'], $stud['eta']);
        $alunni [] = $a;
    }

    $voto1 = new Voto("Storia", 7.5, "Buona interrogazione");
    $voto2 = new Voto("Italiano", 8, "Ottima interrogazione");
    $alunni[1]->setVoto($voto1);
    $alunni[1]->setVoto($voto2);

    $indirizzo1 = new Indirizzo("Via di ugnano", 2, 50142,"Firenze");
    $alunni[1] -> setIndirizzo($indirizzo1);
    //riseralizzazione json

    echo json_encode($alunni);
?>