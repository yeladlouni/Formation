<?php


class User {
    protected $email;
    protected $password;
    protected $firstName;
    protected $lastName;
    protected $birthDate;
    protected $address;
    protected $city;
    protected $profilePicture;

    /**
     * User constructor.
     * @param $email
     * @param $password
     * @param $firstName
     * @param $lastName
     * @param $birthDate
     * @param $address
     * @param $profilePicture
     */
    public function __construct($email, $password, $firstName, $lastName, $birthDate, $address, $profilePicture)
    {
        $this->email = $email;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->profilePicture = $profilePicture;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture): void
    {
        $this->profilePicture = $profilePicture;
    }



}


class Users {
    protected $conn;

    public function __construct() {
        $conn = new PDO("mysql:host=localhost", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function addUser($user) {
        $sql = "INSERT INTO blogs.users(email, password, first_name, last_name, birth_date, address) 
        VALUES('".$user->email."', '".$user->password."', '".$user->firstName."', '"
            .$user->last_name."', '".$user->address."'";
        $this->conn->exec($sql);
    }

    public function removeUser($id) {
        $sql = "DELETE FROM blogs.users WHERE id = ".$id;
        $this->conn->exec($sql);
    }

    public function checkUser($user) {
        $sql = "SELECT COUNT(1) FROM blogs.users WHERE email = '".$user->email
            ."' AND password = '".$user->password."'";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $rows = $result->fetchColumn();

        if(rows>0) {
            return true;
        } else {
            return false;
        }

    }

    public function updateUser($id, $user) {
        $sql = "UPDATE blogs.users SET first_name = '".$user->firstName
            ."', last_name = '".$user->lastName."', address = '".$user->address
            ." WHERE id = ".$id;

    }

    public function getUser($id) {
        $sql = "SELECT * FROM blogs.users WHERE id = ".$id;
        $result = $this->conn->prepare($sql);
        $result->execute();
        $rows = $result->fetchAll();

        foreach ($rows as $row) {
            return new User($row.email, $row.password,
            $row.first_name, $row.last_name,
            $row->address);
        }
    }

    public function __destruct() {
        $this->conn = null;
    }
}