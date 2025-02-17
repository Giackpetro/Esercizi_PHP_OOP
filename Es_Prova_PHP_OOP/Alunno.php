<?php
class Alunno implements JsonSerializable{
    protected $nome;
    protected $cognome;
    protected $eta;
    protected $voto = [];
    protected $indirizzo;

    public function __construct($nome, $cognome, $eta){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    public function jsonSerialize(): array{
      return[
        'nome' => $this->nome,
        'cognome' => $this->cognome,
        'eta' => $this->eta
      ];
    }

    public function getNome() {
      return $this->nome;
    }
    public function setNome($value) {
      $this->nome = $value;
    }

    public function getCognome() {
      return $this->cognome;
    }
    public function setCognome($value) {
      $this->cognome = $value;
    }

    public function getEta() {
      return $this->eta;
    }
    public function setEta($value) {
      $this->eta = $value;
    }

    public function setVoto(Voto $voto){
      $this->voto[] = $voto;
    }

    public function setIndirizzo(Indirizzo $indirizzo){
      $this->indirizzo = $indirizzo;
    }

    // public function stampaAttributi(){
    //     echo "Nome:" => $this->nome;
    //     echo"Cognome:" => $this->cognome;
    //     echo"Eta:" =>$this->eta;
    //     echo "Voti:" => $this ->voto;
    // }
}
?>