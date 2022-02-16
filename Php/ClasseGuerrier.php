<?php
    
    class Guerrier{
        public $niveau;
        public $nom;
        public $age;
        public $force;
        public $arme;


        public function __construct($Lvl, $N, $A, $F, $Ad)
        {
            $this->niveau = $Lvl;
            $this->nom = $N;
            $this->age = $A;
            $this->force = $F;
            $this->arme = $Ad;
        }

        public function getNiveau(){
            return $this->niveau;
        }
        public function setNiveau($Lvl){
            $this->niveau = $Lvl;
        }
    
        public function getNom(){
            return $this->nom;
        }
        public function setNom($N){
            $this->nom = $N;
        }

        public function getAge(){
            return $this->age;
        }
        public function setAge($A){
            $this->age = $A;
        }

        public function getForce(){
            return $this->force;
        }
        public function setForce($F){
            $this->force = $F;
        }

        public function getArme(){
            return $this->arme;
        }
        public function setArme($Ad){
            $this->arme = $Ad;
        }

        public function getInfo(){
            return 'LvL '.$this->niveau.'<br>'.$this->nom.' '.$this->age.' ans <br>force = '. $this->force.' <br> arme : '.$this->arme;
        }
    }

?>