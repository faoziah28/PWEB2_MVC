<?php

require_once "Controllers/UserController.php";

$user = new UserController(); //ini berasal dari usercontroller
$user->index(); //memanggil metod index yg berada di userController.php

?>