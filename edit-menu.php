<?php
include_once '../controllers/MenuController.php';
if (isset($_GET['id'])){
    $menuId=$_GET['id'];
}
$menu= new MenuController;
$currentMenu= $menu->edit($menuId);
if (isset($_POST['submit'])){
    $menu->update($_POST,$menuId);
}
?>
<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currentMenu['menu_image'];?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo $currentMenu['menu_title'];?>">
    <br>
    Body:
    <input type="text" name="body" value="<?php echo $currentMenu['menu_body'];?>">
    Category:
    <input type="text" name="category" value="<?php echo $currentMenu['category'];?>">
    <br>
    <input type="submit" name="submit" value="update">
</form>