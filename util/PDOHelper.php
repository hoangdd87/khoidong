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
     * @return TuKhoa[]
     */
    public function get_All_TuKhoa()
    {
        include_once __DIR__ . '/../model/TuKhoa.php';
        $sth=$this->PDO->prepare("SELECT * FROM dstukhoa WHERE 1");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, "TuKhoa");
    }

    /**
     * @return GoiCauHoi[]
     */
    public function get_All_GoiCauHoi(){
        include_once __DIR__ . '/../model/GoiCauHoi.php';
        $sth=$this->PDO->prepare("SELECT * FROM dsgoicauhoi WHERE 1");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, "GoiCauHoi");

    }

    public function update_GoiCauHoi_TrangThai($magoi,$trangthai){
        $sth=$this->PDO->prepare("UPDATE dsgoicauhoi SET trangthai=:trangthai WHERE magoi=:magoi");
        $sth->bindParam(':magoi',$magoi);
        $sth->bindParam(':trangthai',$trangthai);
        return $sth->execute();

    }

    public function reset_GoiCauHoi_TrangThai(){
        $sth=$this->PDO->prepare("UPDATE dsgoicauhoi SET trangthai=0 WHERE 1");

        return $sth->execute();

    }


}


?>


