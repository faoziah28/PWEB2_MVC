<?php

include_once '../../models/MahasiswaModel.php'; //biar terhubung ke semua properti dan metod yang ada di kelas MahasiswaModel

//membuat class mahassiswa
class MahasiswaController
{
    private $model; //properti model

    //membuat metode construct
    public function __construct($db)
    {
        $this->model = new MahasiswaModel($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }

    public function getMahasiswaById($id)
    {
        return $this->model->getMahasiswaById($id);
    }
}
