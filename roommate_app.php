<!doctype html>

<html>

<head>
  <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />

<meta charset="utf-8">

<title>Roommate Application</title>
<?php include 'head.php';
?>


<style>
* {
    box-sizing: border-box;
}

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
    border: .5em ridge #17252A;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8;
    cursor: pointer;
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
  padding: 10px;
    background-color: rgba(43, 122, 120, 0.6);
    position: absolute;
    bottom: 25px;
    left: 20px;
    color: #DEF2F1;
    font-family: georgia;
    font-size: 16px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}

@media screen and (max-width: 768px) {
  /* The grid: Four equal columns that floats next to each other */
  .column {
      width: auto;
      height: auto;
  }

  /* Style the images inside the grid */
  .column img {
      opacity: 1;
      cursor: default;
  }
  .container {
    display:none!important;
  }
  .noshow {
        display: none !important;
    }
}
  }
}
</style>

</head>

<body>
  <div class="wrapper">
  <h1>Application</h1>
  <br>

  <?php include 'navbar.php';
  ?>
<br>
<p1>
<?php echo "<p style='color:red'>$message</p>";
?>
<?php

if ($_POST){

if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){

$message="Please provide a correct email address";} else {

  $name = strip_tags($_POST['name']);
  $habits = strip_tags($_POST['habits']);
  $work = strip_tags($_POST['work']);
  $income = strip_tags($_POST['income']);
  $email = $_POST['email'];
  $comments = strip_tags($_POST['comments']);

  $to = 'hayescrowley2@gmail.com';
  $subject = 'Roommate Application.';
  $body = "\n Name: " .$name. "\n\n Habits: " .$habits. "\n\n Work/Education: " .$work. "\n\n Income: " .$income. "\n\n Questions/Comments: " .$comments. "\n\n Email: " .$email;
  $headers = 'From: application@hayescrowley.com';
  $headers = "MIME-Version: 1.0\r\n";
  $headers = "Content-Type: text/html; charset=utf-8\r\n";
  $headers= "X-Priority: 1\r\n";
  if (mail($to, $subject, $body, $headers)) {
  echo "<div style='text-align:center;'><p1><strong>Thanks $name for reaching out! Look for my response at $email soon! </strong></p1></div>";
  } else {
  $message = 'Sorry, an error occurred. Message me on Facebook instead.';
  }
  }}
?>
</p1>

<div style="text-align:center">

  <h2>Room Available October 1st in Space-Age Bachelor Pad</h2>
  <p2 class="noshow">Click on the images below to view</p2>
</div>
<br>

<div class="row">
  <div class="column">
    <img src="files/images/room_3a.jpg?<?php echo time(); ?>" alt="here be the room" style="width:100%; height:100%;" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/house.jpg" alt="space-age bachelor pad" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/living_1.jpg" alt="good livin'" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/living_2.jpg" alt="room with flag up for grabs!" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/living_3.jpg" alt="good dinin'" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/kitchen.jpg" alt="space-age kitchen" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/cat_power3.jpg" alt="space-age af" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="files/images/turco4.jpg" alt="praise him!" style="width:100%" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>

<br>
<hr>
<p1><strong>Thanks for filling out this application.</strong> This will help me manage incoming messages and keep track of who's who.</p1><br><br>
<p1><strong>Rent is $565, w/o utilities.</strong> The room you're applying for is the smaller of the three and shares a bathroom (with me). There may be a chance to move into my room, or the Master room, at the end of the lease.</p1><br><br>
<p1><strong>The house itself is $1812 per month, 1162 sq ft., 3/2, and is located in Kirkwood.</strong> It is small but nice, with a newly remodeled kitchen and bathrooms, has W/D, and a small backyard with plenty of squirrels/birds/etc. There is a nice park nearby, neighbours are cool, etc. I've chosen to stay here, if that means anything.</p1><br><br>
<p1><strong>If we're a good fit, you'll be living with me and my friend Connor.</strong> We are in our late 20's, like cheesy 90's action films, horror movie nights, drinking beer/wine/whisky, and having people over (occasionally). We are both busy and usually get up around 8 am during the week.</p1><br><br>
<p1><strong>In order to qualify the leasing agency will want to see that you make enough to cover rent,</strong> and so you'll need to have pay stubs, bank statements, or some other documentation available. Student loans/stipends also work.</p1><br><br>
<p1>Please fill out all fields as best you can, hit send, and I'll respond soon.<strong> This form works and I will recieve your message.</strong></p1><br><br>
<p1><strong>Thank you!</strong>
<br>
<hr>
<!--<p1> Reviewing Applications: Look for Facebook post or check back here later to see if there is a new call for applications. If you've already sent in an application, look out for an email (6/11/18). </p1>
!-->
<div>
<form id="contactform" action="roommate_app.php" method="post">
<p1><strong>Name:</strong><br/><input name="name" type="text" required /></p>
<p1><strong>What do you like to do? Unusual habits?</strong><textarea name="habits" type="textarea" required /></textarea></p>
<p1><strong>What do you do for work/education?</strong><textarea name="work" required /></textarea></p>
<p1><strong>Do you have provable income?</strong><br/><input name="income" type="checkbox" style="width:24px;height:24px;position:relative;top:6px;" required/>Yup</p>
<p1><strong>Email: </strong><br/><input name="email" type="email" required/></p>
<p1><strong>Questions or comments?</strong><br/><textarea name="comments" />   </textarea></p>
<input type="submit" name="submit" value="Send!"/>
</form>
</div>

<br>


<br>
<br>


<div class="push"> </div>

</div>

<?php
include 'footer.php';
?>

<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
