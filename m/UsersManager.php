<?php

/**
 * Description of CategManager
 *
 * @author webform
 */
class UsersManager {
    // Attributs
    private $db;
    // Constantes
    // méthodes
    public function __construct(PDO $con) {
        $this->db = $con;
    }
    // pour se connecter
    public function connexionUsers(Users $u){
        $login = $u->getLogin();
        $mdp = $u->getPwd();
        $sql = "SELECT * FROM users WHERE login=? AND pwd=? ;";
        $req = $this->db->prepare($sql);
        $req->bindValue(1,$login,PDO::PARAM_STR);
        $req->bindValue(2,$mdp,PDO::PARAM_STR);
        $req->execute();
        // on est connecté
        if($req->rowCount()){
            
            $_SESSION = $req->fetch(PDO::FETCH_ASSOC);
            $_SESSION['clefUnique']= session_id();
            // var_dump($_SESSION);
            return true;
        // échec    
        }else{
            return false;
        }
    }
    
}
