<?php

    require_once('database.php');

    $user = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   $objDb = new db();
   $link = $objDb->connect_mysql();

   $sql = " INSERT into user_register(name, email, phone, message) values('$user', '$email', '$phone', '$message') ";

   if(mysqli_query($link, $sql)) {
       echo 'Usuário registrado com sucesso';
   } else {
       echo 'Erro ao registrar usuário';
   }

?>