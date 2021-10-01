<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Kevin fred",
  //     "nrp" => "193040163",
  //     "email" => "kevinajjh@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Dio",
  //     "nrp" => "193040164",
  //     "email" => "udapadang@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "claudio ",
  //     "nrp" => "193040188",
  //     "email" => "bangbewok@gmail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ]
  // ];

  private $dbh;   //database handler
  private $stmt;

  public function __construct()
  {
    // database source nam
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
