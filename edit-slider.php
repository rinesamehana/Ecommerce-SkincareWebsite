<?php
include_once '../controllers/SliderController.php';
if (isset($_GET['id'])){
    $sliderId=$_GET['id'];
}
$slider=new SliderController();
$currentSlider=$slider->editSlider($sliderId);
if (isset($_POST['submit'])){
    $slider->updateSlider($_POST,$sliderId);
}
?>
<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currentSlider['slider_image'];?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo $currentSlider['slider_title'];?>">
    <br>
    Body:
    <input type="text" name="body" value="<?php echo $currentSlider['slider_body'];?>">
    <br>
    <input type="submit" name="submit" value="update">
    </form>