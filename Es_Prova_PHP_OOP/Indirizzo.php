<?php
    class Indirizzo implements JsonSerializable{
        protected $via;
        protected $numCivico;
        protected $cap;
        protected $citta;

        public function __construct($via, $numCivico, $cap, $citta){
            $this->via = $via;
            $this->numCivico = $numCivico;
            $this->cap = $cap;
            $this->citta = $citta;
        }

        public function jsonSerialize() : array{
            return[
                'via' => $this->$via,
                'numCivico' => $this->$numCivico,
                'cap' => $this->$cap,
                'citta' => $this->$citta
            ];
        }
    }
?>