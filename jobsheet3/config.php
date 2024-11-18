<?php

//buat kelas database untuk koneksi 
class database
{
    var $host  = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik1";
    var $koneksi;

    //kita membungkus  getKoneksi pada variabel koneksi yang akan dipanggil di file file berikutnya
    function getKoneksi()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$this->koneksi) {
            die("koneksi database gagal: " . mysqli_connect_error()); //jika koneksi ke database tidak ditemukan muncul allert koneksi database gagal
        }
        return $this->koneksi; //jika database ditemukan maka akan ke koneksi
    }
}
