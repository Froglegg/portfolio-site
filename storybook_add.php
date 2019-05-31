<head>
<?
include ('head.php');
include ('db_connect.php');
?>

<script src="scripts/jquery.js"></script>
</head>
<body>
<div class="wrapper">
<h1>Add Entry</h1>

<?php
include ('navbar.php');
?>

<br>
<div width="90%">
<form name="noteworthy" METHOD="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<br>
<p1>Title</p1><br><input type="text" name="title" id="$title" size="50"> <br>
<p1>Author</p1><br> <input type="text" name="author" id="$author" size="50"><br>
<p1>Description</p1><div contenteditable="true"><textarea NAME="description" id="$description" ROWS="5" COLS="30"></textarea></div>
<Input type="submit" name="enter" id="$enter" value="Enter"><br>
</form>

<p1>
<?
echo $submitted = date("Y-m-d");
?>

</p1>

</div>

<?
$title = mysqli_real_escape_string($con, $_REQUEST['title']);
$author = mysqli_real_escape_string($con, $_REQUEST['author']);
$description = mysqli_real_escape_string($con, $_REQUEST['description']);
$enter = $_REQUEST['enter'];


if(isset($_REQUEST['enter'])){
$submitted = date("Y-m-d");
$sql = "INSERT INTO notes (title, author, description, submitted) VALUES ('$title','$author','$description','$submitted')";
}

if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
    header('Location: storybook.php');
    mysqli_close($con);
    exit();
}
?>

<div class="push"> </div>

</div>

<?php
include 'footer.php';
?>

</body>
