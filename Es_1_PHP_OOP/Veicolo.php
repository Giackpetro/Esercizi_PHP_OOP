<?php
class Veicolo{
    protected $marca;
    protected $anno;

    public function __construct($marca, $anno)
    {
        $this->marca = $marca;
        $this->anno = $anno;
    }


    public function getMarca() {
      return $this->anno;
    }

    public function getAnno() {
      return $this->marca;
    }
}
?>