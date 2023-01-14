<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email  = $_POST['email'];
        $password = $_POST['password'];
    }


?>
 <!-- database -->
       <h2>Username : <?php if(isset($username)){
            echo $username;
        } ?></h2>
        <h2>E-amil : <?php if(isset($email)){
            echo $email;
        } ?></h2>
        <h2>Password : <?php if(isset($password)){
            echo $password;
        } ?></h2>

