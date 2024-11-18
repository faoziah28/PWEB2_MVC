<?php

include_once '../../models/ProgramStudiModel.php'; //biar terhubung ke semua properti dan metod yang ada di kelas ProgramStudiModel

//membuat class mahassiswa
class ProgramStudiController
{
    private $model; //properti model

    //membuat metode construct
    public function __construct($db)
    {
        $this->model = new ProgramStudiModel($db);
    }

    public function index()
    {
        return $this->model->getAllProgramStudi();
    }
}
