<?php
include_once '../controllers/userController.php';
if (isset($_GET['id'])){
    $userID=$_GET['id'];
}
$user= new User;
$currentUser= $user->edituser($userID);
if (isset($_POST['submit'])){
    $user->updateuser($_POST,$userID);
}
?>
<form method="post">
    Emri:
    <input type="text" name="emri" value="<?php echo $currentUser['emri'];?>">
    <br>
    Username:
    <input type="text" name="username" value="<?php echo $currentUser['username'];?>">
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $currentUser['email'];?>">
    <br>
    Numri:
    <input type="number" name="numri" value="<?php echo $currentUser['numri'];?>">
    <br>
    Password:
    <input type="text" name="password" value="<?php echo $currentUser['password'];?>">
    <br>
    <input type="submit" name="submit" value="update">
</form>