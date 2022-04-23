<?php
require_once '../controllers/SliderController.php';

$slider = new sliderController;
if(isset($_POST['submit'])){
    $slider->insertSlider($_POST);
}


?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Content:
        <textarea name="body" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>