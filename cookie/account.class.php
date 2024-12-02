<?php
    require_once "database.class.php";
    class Account{
        public $username;
        public $password;
        public $role ;
        protected $db;

        function __construct(){
            $this->db = new Database;
        }
        function add(){
            $sql = "INSERT INTO account (username, password, role) VALUES (:username, :password, :role)";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(":username" , $this->username);
            $hashpass = password_hash($this->password , PASSWORD_DEFAULT);
            $query->bindParam(":password", $this->password);
            $query->bindParam(":role", $this->role);
            
            return $query->execute();
        }
        

        function insert(){
            $sql = "INSERT INTO account (username, password, role) VALUES (:username, :password, :role)";
            $query = $this->db->connect()->prepare($sql);

            $query->bindParam(":username", $this->username);
            $query->bindParam(":password", $this->password);
            $query->bindParam(":role", $this->role);
            
            $query->execute();
        }


        function autUser($username, $password){
            $sql = "SELECT * FROM account WHERE username = :username LIMIT 1";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(":username" , $username);
            if ($query->execute()){
                $data = $query->fetch();
                if($data && $data["password"] == $password){
                    return $data;
                }
            }
            return null;
        }


            function showAll(){
                $sql = "SELECT * FROM account";
                $query = $this->db->connect()->prepare($sql);

                if($query->execute()){
                    $data = $query->fetchAll();
                }
                return $data;
                }
        } 
        // $obj = new Account;
        
        // echo "<pre>";
        // print_r($obj->showAll());
        // echo "</pre>";

        // $obj->add(); 

        // echo "<pre>";
        // print_r($obj->showAll());
        // echo "</pre>";
?>