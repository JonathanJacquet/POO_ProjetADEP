<?php 

class usersManager extends manager {

//Récupère les données de tous les utilisateurs
function getUsers() {
    $db = $this->getDb();
    $request = $db->query('SELECT * FROM users');
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//Récupère les données d'un utilisateur
function getUser($user) {
    $db = $this->getDb();
    $request = $db->prepare("SELECT * FROM users WHERE user_id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//Récupère les données d'un utilisateur en fonction de son nom
function getUserByName($userName) {
    $db = $this->getDb();
    $request = $db->prepare("SELECT * FROM users WHERE name = ?");
    $request->execute([$userName]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//function that adds the user
function addUser(user $user) {
    $db = $this->getDb();
    $request = $db->prepare("INSERT INTO users (status, name, firstname, password, mail, street, city, pc, id_pole_emploi, sex) VALUES(:status, :name, :firstname, :password, :mail, :street, :city, :pc, :id_pole_emploi, :sex)");
    $result = $request->execute([
        "status" => $user->getStatus(),
        "name" => $user->getName(),
        "firstname" => $user->getFirstname(),
        "password" =>  password_hash($user->getPassword(), PASSWORD_BCRYPT, ['cost' => 13]),
        "mail" => $user->getMail(),
        "street" => $user->getStreet(),
        "city" => $user->getCity(),
        "pc" => $user->getPc(),
        "id_pole_emploi" => $user->getNpe(),
        "sex" => $user->getSexe()
    ]); 
    $request->closeCursor();   
    return $result;
}
function updateUser(user $user, $id) {
    $db = $this->getDb();
    $id =  $_GET["id"];
    $request = $db->prepare("UPDATE users SET status = :status, name = :name, firstname = :firstname, password = :password, mail = :mail, street = :street, city = :city, pc = :pc, id_pole_emploi = :id_pole_emploi, sex = :sex WHERE user_id = :user_id");
    $result = $request->execute([
        "name" => $user->setName(),
        "firstname" => $user->setFirstname(),
        "password" => $user->setPassword(),
        "mail" => $user->setMail(),
        "street" => $user->setStreet(),
        "city" => $user->setCity(),
        "pc" => $user->setPc(),
        "id_pole_emploi" => $user->setNpe(),
        "sex" => $user->setSexe(),
        "id" => $user->getId(),
    ]);
    $request->closeCursor();
    return $result;
}
//function that removes the user
function deleteUser($id) {
    $db = $this->getDb();
    $request = $db->prepare("DELETE FROM users WHERE user_id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}

function sortUser($form){
    $db = $this->getDb();
    $sql = "SELECT * FROM users ";
    
    if ($form["status"])
    {
        $sql .= "WHERE status = '" . $form['status']."'";
                if ($form['order'])
                    {
                    $sql .= " ORDER BY " . $form["order"] ." ";
                    }    
                        if ($form["sort"] == "1")
                        {
                            $sql .= " ASC";
                        }
                            elseif ($form["sort"] == "0")
                            {
                                $sql .= " DESC";
                            }
    }
    $query = $db->query($sql);
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}
}
?>