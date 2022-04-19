<?php

class Security{

    private $file = "";

    private Array $user = array();

    public function __construct(String $filePath){
        $this->file = json_decode(json_encode(simplexml_load_file($filePath)), true);
        $this->file = $this->file['user'];
    }

    public function attemptoLogin(String $mail, String $pass){
        foreach($this->file as $usr){
            if($usr['email'] == $mail && $usr['passwd'] == $pass){
                $this->user['email'] = $usr['email'];
                $this->user['name'] = $usr['name'];
            }
        }
    }

    public function getUser(String $key){
        return $this->user[$key];
    }

}