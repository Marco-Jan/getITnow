<?php

class User
{

    private int $id;

    private string $name;

    private int $adressId;

    private string $email;

    private string $password;

    private ?string $birthday;

    private string $role;


    public function __construct($id, $name, $adressId, $email, $password, $birthday, $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->adressId = $adressId;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;
        $this->role = $role;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAdress()
    {
        return $this->adressId;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

    public static function getAllUser($db)
    {

        $stmt = $db->query("SELECT * FROM benutzer");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $users = [];

        foreach ($results as $row) {
            $users[] = new User($row['BenutzerID'], $row['Name'], $row['AdresseID'], $row['Email'], $row['Passwort'], $row['Geburtsdatum'], $row['Rolle']);
        }

        return $users;

    }
}