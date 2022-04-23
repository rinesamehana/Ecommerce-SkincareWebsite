<?php
require_once '../controllers/BlogController.php';

$blog = new Blogcontroller;
if(isset($_POST['submit'])){
    $blog->insertblog($_POST);
}


?>
<div>
    <form method="POST">
        Title:
        <input type="text" name="title">
        <br>
        Body:
        <textarea name="body" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>