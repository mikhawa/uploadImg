<?php

/**
 * Description of Users
 *
 * @author webform
 */
class Users {
    // Attributs
    private $idusers;
    private $login;
    private $pwd;
    private $droits_iddroits;
    // Constantes
    // méthodes
    // méthodes
     public function __construct(Array $datas) {
        $this->hydrate($datas);
    }
    
    // hydratation
    private function hydrate(Array $a) {
        foreach ($a AS $clef => $valeur){
            $maMethode = "set".ucfirst($clef);
            if(method_exists($this, $maMethode)){
                $this->$maMethode($valeur);
            }
        }
    }
    public function getIdusers() {
        return $this->idusers;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function getDroits_iddroits() {
        return $this->droits_iddroits;
    }

    public function setIdusers($idusers) {
        $this->idusers = $idusers;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    public function setDroits_iddroits($droits_iddroits) {
        $this->droits_iddroits = $droits_iddroits;
    }


}
