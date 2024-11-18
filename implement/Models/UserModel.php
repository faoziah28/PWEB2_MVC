<?php
class Database
{
    public $db;

    public function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "", "implemen");
    }
}

class UserModel extends Database
{
    public function getUserById()
    {
        $query = "SELECT * FROM user";
        return mysqli_query($this->db, $query);
    }
}
