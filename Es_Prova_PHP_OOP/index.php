<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
        require_once 'Alunno.php';

        $alunno1 = new Alunno("Giacomo", "Petrini", "18");
        $alunno2 = new Alunno("Yuri", "Viligiardi", "18");
        $alunno3 = new Alunno("Cosimo", "Ballerini", "18");
        $alunno4 = new Alunno("Matteo", "Ciaschy", "18");

        $studenti = [$alunno1, $alunno2, $alunno3, $alunno4];

        echo"<div class='div'";
        foreach ($studenti as $alunno) {
            $alunno->stampaAttributi();
        }
        echo"</div";
    ?> 
</body>
</html>
