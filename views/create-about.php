<?php
require_once '../controllers/aboutController.php';

$about = new AboutController;
if(isset($_POST['submit'])){
    $about->insertabout($_POST);
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