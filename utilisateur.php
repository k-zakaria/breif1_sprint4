<?php
    include 'personne.php';
    class Utilisateur extends Personne
    {
        public function __construct($firstname, $lastname, $username, $password, $email)
        {
            parent:: __construct($firstname, $lastname, $username, $password, $email);
        }
    }
?>