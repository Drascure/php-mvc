<?php
    class Abonne extends Utilisateur{
        public function __construct($n, $p, $r){
            $this->user_name = $n;
            $this->user_pass = $p;
            $this->user_region = $r;
        }
        
        public function setPrixAbo(){
            if($this->user_region === 'Sud'){
                return $this->prix_abo = parent::ABONNEMENT / 2;
            }else{
                return $this->prix_abo = parent::ABONNEMENT;
            }
        }
    }
?>