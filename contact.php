<!doctype html>



<html>



<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119518899-1"></script>

  <script>

    window.dataLayer = window.dataLayer || [];

    function gtag(){dataLayer.push(arguments);}

    gtag('js', new Date());



    gtag('config', 'UA-119518899-1');



    gtag('set', {'user_id': 'username'}); // Set the user ID using signed-in user_id.

  </script>



<meta charset="utf-8">



<title>Contact</title>

<?php include 'head.php';

?>





</head>



<body>

  <div class="wrapper">

  <h1> Contact Me </h1>
<br>


  <?php include 'navbar.php';

  ?>



<?php echo "<p style='color:red'>$message</p>";

 ?>



<div>

    <form id="contactform" action="contact.php" method="post">

<p1>Name:<br/><input name="name" type="text" required /></p>

<p1>Company Name: <br/><input name="company_name" type="text" /></p>

<p1>Email: <br/><input name="email" type="email" required/></p>

<p1>Message: <br/><textarea name="comments" required/>   </textarea></p>

    <input type="submit" name="submit" value="Send!"/>

</form>

</div>

<br>

<?php



if ($_POST){



if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){



$message="Please provide a correct email address";} else {



  $name = strip_tags($_POST['name']);

  $company_name = strip_tags($_POST['company_name']);

  $email = $_POST['email'];

  $comments = strip_tags($_POST['comments']);



  $to = 'hayescrowley@gmail.com';

  $subject = 'Contact from site visitor.';

  $body = "\n Name: " .$name. "\n\n Comments: " .$comments. "\n\n Email: " .$email;

  $headers = 'From: contact_form@hayescrowley.com';

  $headers = "MIME-Version: 1.0\r\n";

  $headers = "Content-Type: text/html; charset=utf-8\r\n";

  $headers= "X-Priority: 1\r\n";

  if (mail($to, $subject, $body, $headers)) {

  echo "<p1>Thanks $name for reaching out! Look for my response at $email soon! </p1>";

  } else {

  $message = 'Sorry an error occurred. Please try again later.';

  }

  }}

?>

<br>

<br>





<div class="push"> </div>



</div>



<?php

include 'footer.php';

?>



</body>



</html>

