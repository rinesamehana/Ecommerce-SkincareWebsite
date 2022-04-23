<?php
require_once './controllers/ContactController.php';

$contact = new ContactController;
if(isset($_POST['submit'])){
    $contact->insertContact($_POST);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="icon" href="image/websitelogo.png">
	<link rel="stylesheet" type="text/css" href="css/contactus.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<!-- header -->
<?php include "includes/header.php" ;?>
	<!-- header -->

	<!-- contac-us -->
	<div class="containercu">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<form method="POST">
				<input type="text" class="field" name="emri" placeholder="Your Name">
				<input type="text" class="field" name="email" placeholder="Your Email">
				<textarea placeholder="Message" name="message" class="field"></textarea>
				<button type="submit" name="submit" value="Save" class="btn" onclick="alert('Message Sent Successfully!')" >Send</button>
				</form>
			</div>
		</div>
	</div>
	<!-- contac-us -->

	<!-- footer -->
	<?php include "includes/footer.php" ;?>
	<!-- footer -->

	
</body>
<script src="js/script.js"></script>
</html>
