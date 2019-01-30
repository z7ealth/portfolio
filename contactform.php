<?php
  $name = $_POST['contactName'];
  $email = $_POST['contactEmail'];
  $subject = $_POST['contactSubject'];
  $message = $_POST['contactMessage'];

  $mailTo = ["hector_sag@outlook.com", "rosalbafigueroa230@gmail.com"];
  $headers = "From: " .$email;
  $headers .= "Reply-To: $email";
  $txt = "You have recieved an email from" .$name ."\n\n" .$message;
  try {
    mail($mailTo, $subject, $txt, $headers);
  } catch (\Exception $e) {
    echo "Error sending mail";
  }
  header("Location: index.php#contact");
?>
