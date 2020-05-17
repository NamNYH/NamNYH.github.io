<? php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = "nam656567@gmail.com";
		$headers = "From: $name";
		echo $message = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		if (mail($to,$headers,$message)) {
			echo "Email sent";
		}
		else{
			echo "Error: Please try again later";
		}
		
	}

?>