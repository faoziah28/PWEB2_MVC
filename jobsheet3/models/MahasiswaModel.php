<?php
//membuat model dg kelas MahasiswaModel
class MahasiswaModel
{
    private $koneksi;
    
    //lalu disini kita menggunakan  construct yang dimana construct adalah metod pertama yang dipanggil
    //disini kita memasukkan paramater $db 
    public function __construct($db)
    {
        $this->koneksi = $db; //mengkonek ke database
    }

    //metode getAllMahasiswa untuk mengambil semua data mahasiswa
    public function getAllMahasiswa()
    {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    //metode getMahasiswaById untuk mengambil data mahasiswa tertentu berdasarkan id
    public function getMahasiswaById($id)
    {
        $query = "SELECT * FROM mahasiswa WHERE id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
}
