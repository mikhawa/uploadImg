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
    
    
}
