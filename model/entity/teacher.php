<?php 

class teacher extends user {
    protected $password;

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    function __construct(array $data = null)
    {
        if ($data) {
            $this->hydrate($data);
        }
    }
}




?>