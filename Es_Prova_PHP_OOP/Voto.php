<?php
    class Voto implements JsonSerializable{
        protected $subject;
        protected $value = 6;
        protected $description;

        public function __construct($subject, $value, $description){
            $this->subject = $subject;
            $this->value = $value;
            $this->description = $description;
        }

        public function jsonSerialize() : array{
            [
                'materia' => $this->$subject,
                'voto' => $this->$value,
                'descrizione' => $this->$description
            ];
        }
    }
?>