<?php
include_once '../controllers/aboutController.php';
if (isset($_GET['id'])){
    $aboutID=$_GET['id'];
}
$about= new AboutController;
$currentAbout= $about->editabout($aboutID);
if (isset($_POST['submit'])){
    $about->updateabout($_POST,$aboutID);
}
?>
<form method="post">
    Title:
    <input type="text" name="title" value="<?php echo $currentAbout['title'];?>">
    <br>
    <br>
    Body:
    <textarea name="body" cols="30" rows="10"><?php echo $currentAbout['body'];?></textarea>
    <input type="submit" name="submit" value="update">
</form>