<?php
include_once '../controllers/BlogController.php';
if (isset($_GET['id'])){
    $blogID=$_GET['id'];
}
$blog= new BlogController;
$currentBlog= $blog->editblog($blogID);
if (isset($_POST['submit'])){
    $blog->updateblog($_POST,$blogID);
}
?>
<form method="post">
    Title:
    <input type="text" name="title" value="<?php echo $currentBlog['title'];?>">
    <br>>
    <br>
    Body:
    <textarea name="body" cols="30" rows="10"><?php echo $currentBlog['body'];?></textarea>
    <input type="submit" name="submit" value="update">
</form>