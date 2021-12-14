<?php
    require_once '/Applications/XAMPP/xamppfiles/htdocs/database/database.php';
    
    class Model {
        public $db;
        function __construct() {
            $this->db = DB::connectDB();
        }

        function settUser($email, $username, $phone, $password) {
            $statement = $this->db->prepare("INSERT INTO user VALUES (?, ?, ?, ?)");
            $statement->execute([$email, $username, $phone, $password]);
        }

        function setService($service, $status, $email, $phone, $name, $address) {
            $statement = $this->db->prepare("INSERT INTO layanan VALUES (null, ?, ?, ?, ?, ?, ?)");
            $statement->execute([$service, $status, $email, $phone, $name, $address]);
        }

        function getUser($email) {
            $statement = $this->db->prepare("SELECT * FROM user WHERE email = ?");
            $statement->execute([$email]);
            return $statement->fetch();
        }

        function getService() {
            $statement = $this->db->prepare("SELECT * FROM layanan");
            $statement->execute();
            return $statement->fetchAll();
        }

        function auth($email, $pass) {
            $statement = $this->db->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
            $statement->execute([$email, $pass]);
            $count = $statement->rowCount();
            return $count;
        }

    }

?>