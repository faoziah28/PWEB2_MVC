<?php
class UserController
{
    public function index()
    {
        require_once "Models/UserModel.php";
        $model = new UserModel(); //memanggil usermodel dari folder Models
        $data = $model->getUserById(); // $model ditampung di variabel data lalu mengambil data user
        include 'views/user_view.php';
    }
}
