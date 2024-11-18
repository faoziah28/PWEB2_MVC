<?php

class ProgramStudiModel
{
    private $koneksi; //akses koneksinya private

    //lalu disini kita menggunakan  construct yang dimana construct adalah metod pertama yang dipanggil
    //disini kita memasukkan paramater $db 
    public function __construct($db)
    {
        $this->koneksi = $db; //mengkonek ke database
    }

    //buat metode getAllProgramStudi yang mengambil semua data program_studi
    public function getAllProgramStudi()
    {
        $query = "SELECT * FROM program_studi";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
}
