<?php 
session_start();

if(isset($_SESSION['user'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password']
}



require('views/registro.view.php');

?>