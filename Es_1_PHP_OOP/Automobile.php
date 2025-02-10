<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es veicolo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require_once 'Veicolo.php';
        class Automobile extends Veicolo{
            protected $modello;

            public function __construct($marca, $anno, $modello){
                parent::__construct($marca, $anno);
                $this->modello = $modello;
            }

            public function getModello(){
                return $this->modello;
            }

            public function stampaAttributi(){
                echo "<p>Marca:" . $this->getMarca() . "</p>";
                echo"<p>Anno:" . $this->getAnno() . "</p>";
                echo"<p>Modello:" . $this->getModello() . "</p>";
            }
        }
        $veicolo1 = new Automobile("ferrari", 2002, "F2002");
        $veicolo2 = new Automobile("fiat", 2015, "500");
        $veicolo3 = new Automobile("porsche", 2023, "Macan");

        $veicoli = [$veicolo1, $veicolo2, $veicolo3];
    ?>

    <div class='div'>
        <?php
            foreach ($veicoli as $veicolo) {
                echo"<h2>Veicolo</h2>";
                $veicolo->stampaAttributi();
            }
        ?>
    </div>
        
    
</body>
</html>
