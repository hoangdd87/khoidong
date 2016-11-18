<?php

class PDOHelper
{
    public $PDO;

    public function __construct()
    {
        try {

            //include($_SERVER['DOCUMENT_ROOT'] . '/variables/variables_crossword.php');
            $host = 'localhost';
            $database = 'khoidong';
            $user = 'root';
            $pass = 'admin123';

            $this->PDO = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch
        (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param string $username
     * @param string $password
     * @return User
     */
    public function get_User_by_username_and_pass($username, $password)
    {
        include_once __DIR__ . '/../model/User.php';
        $sth = $this->PDO->prepare("SELECT user_name, password, role FROM users 
                          WHERE user_name=:user_name AND password=:password");
        $sth->bindParam(':user_name', $username);
        $sth->bindParam(':password', $password);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
        return $sth->fetch();
    }

    /**
     * @return GoiCauHoi[]
     */
    public function get_All_GoiCauHoi()
    {
        include_once __DIR__ . '/../model/GoiCauHoi.php';
        $sth=$this->PDO->prepare("SELECT * FROM goicauhoi WHERE 1");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, "GoiCauHoi");
    }

}


?>


