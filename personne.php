<?php
    class Personne
    {
        protected = $firstname; 
        protected = $lastname;
        protected = $username;
        protected = $password;
        protected = $email;

        public function __connstruct($firstname, $lastname, $username, $password, $email)
        {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }

        public function getFirstname(){
            return $this->firstname;
        }
        public function setFirstname($firstname){
            return $this->firstname = $firstname;
        }

        public function getLastname(){
            return $this->lastname;
        }
        public function setLastname($lastname){
            return $this->lastname = $lastname;
        }

        public function getUsername(){
            return $this->username;
        }
        public function setUsername($username){
            return $this->username = $username;
        }

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            return $this->password = $password;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            return $this->email = $email;
        }

    }
?>