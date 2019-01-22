<?php 

class admin extends user {
    protected $password;
    protected $status;

    public function setPassword($password){
        $this->password = $password;
    }

    public function setStatus($status){
        $this->stat = $status;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getStatus(){
        return $this->status;
    }

    function __construct($data = false)
    {
        if ($data) {
            $this->hydrate($data);
        }
    }
}




?>