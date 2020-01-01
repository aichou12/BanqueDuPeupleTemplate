<?php
     require_once '../model/loginbd.php';
     $email='';
     $password='';
     
     if(isset($_POST['connecter']))
     {
         extract($_POST);
         $result=getLogin($_POST['email'],$_POST['password']);
        
     
    
     header("location:accueil");
     }
    ?>