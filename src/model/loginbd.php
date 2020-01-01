<?php

require_once 'db.php';

     function getLogin($email,$password){
        $sql="SELECT a.idU , a.email,a.password FROM user a WHERE 
        a.email='". $email . "'
        a.password='". $password . "'";
       $conn = getConnection();
       $conn->exec($sql);
        }
?>


  