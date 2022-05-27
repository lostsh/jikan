<?php
include "../connection.php";

class Security{

    private $pdo = null;

    private Array $user = array();

    public function __construct(){
        include "../connection.php";
        $this->pdo = $pdo;
    }

    public function attemptoLogin(String $mail, String $pass){

        if(isset($this->pdo)){
            //sql to get the uname
            $sql = "SELECT `name`, email FROM users WHERE email LIKE :mail AND `password` LIKE :passwd;";
            $query = $this->pdo->prepare($sql);

            if ($query->execute(['mail' => $mail, 'passwd' => $pass])) {
                foreach ($query as $row) {
                    $this->user['email'] = $row['email'];
                    $this->user['name'] = $row['name'];
                }
            }
        }
    }

    public function getUser(String $key){
        return $this->user[$key];
    }

}