<head>
<?
include 'head.php';
include ('db_connect.php');
?>
<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>


<script src="scripts/jquery.js"></script>
</head>
<body>
<div  class="wrapper">
<h1>Post Comments</h1>

<?php
include 'navbar.php';
?>

<?
$sql= "SELECT * FROM notes WHERE id = " . $_REQUEST['id']."";
$query= mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($query)){
$title = $row['title'];
$link = $row['link'];
$description = $row['description'];
$submitted = $row['submitted'];
}

?>


<br>

<form name="noteworthy" METHOD=POST action=<?php echo $_SERVER['REQUEST_URI']; ?>>
<br>
Title: *<input type="text" name="title" id="$title" size="50" value="<?php echo $title; ?>"> <br>
Link: <input type="text" name="link" id="$link" size="50" value="<?php echo $link; ?>"><br>
Description: <div contenteditable="true"><textarea name="description" id="$description" rows="5" cols="30"><?php echo $description; ?></textarea></div><br>
<Input type="submit" name="enter" id="$enter" value="enter">
</form>
<?
echo $submitted = date("Y-m-d");
?>

<div class="push"> </div>

</div>

<?php
include ('db_connect.php');
if(isset($_REQUEST['enter'])){
$ed_id = $_REQUEST['id']; // $id is now defined
$ed_title = mysqli_real_escape_string($con, $_REQUEST['title']);
$ed_link = mysqli_real_escape_string($con, $_REQUEST['link']);
$ed_description = mysqli_real_escape_string($con, $_REQUEST['description']);
$ed_enter = $_REQUEST['enter'];


$ed_submitted = date("Y-m-d");
$ed_sql = "UPDATE notes SET title='$ed_title', link='$ed_link', description='$ed_description', submitted= '$ed_submitted' WHERE id = '$ed_id' ";
$ed_query= mysqli_query($con, $ed_sql);



if(mysqli_query($con, $ed_sql)){
    echo "Records updated successfully.";
    header('Location: notebook.php');
    mysqli_close($con);
    exit();
  }
  }

?>

<?php
include 'footer.php';
?>

</body>
