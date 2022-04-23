<?php
    session_start();
    require_once './controllers/userController.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role= $_POST['role'];

        if(validateEmptyData($email,$password)){
            header("Location: index.php");
        }else if(validateData($email,$password,$role=2)){
            header("Location: views\menuDashboard.php");
        }else{
            
            echo '<script>alert("Email ose password eshte gabim!")</script>';
            
        }
    }
    function validateEmptyData($email,$password){
        if(empty($email)||empty($password)){
            return true;
        }else {
            return false;
        }
    }
    function validateData($email,$password){
        $user = new User;
        $users = $user -> readUser();
        foreach ($users as $user) {
            if($user['email']==$email&&$user['password']==$password){
                $_SESSION['emri']=$user['emri'];
                $_SESSION['roli']=$user['roli'];
                return true;
            }
        }
        return false; 
    }
?>
