<head>
<?php
include 'head.php';
?>
<title>PCT Book List</title>
<meta name="keywords" content="Pacific Crest Trail, PCT, Trail Angel Mary, books, book list, booklist">
<meta name="description" content="A book list compiled from PCT thru-hikers favorite books in 2017">
</head>
<body>
<div  class="wrapper">

<h1>MySQL/PHP Book List</h1>
<br><br><br>
<?php
include 'navbar.php';
?>
<br>
<h2 style="text-align: center;"> <a href=https://pct145trailangelmary.com/2018/01/02/complete-book-list/) style="color:#2b1818!important; font-weight: 900!important;"> PCT Class of 2017 Favorite Books</a> </h2>
<br>
<p1>A simple SQL query written in PHP, this application pulls from a MySQL database I built that has <a href=https://pct145trailangelmary.com/2018/01/02/complete-book-list/) style="color:#2b1818!important; font-weight: 900!important;">the favorite books of the PCT Class of 2017,</a> and a drop-down menu with option values pulled from the same database which then sort the output below based on the Author last name row. </p1><br><br>

<SELECT class="button" style="background-color:#79d2ce;" onchange=location.href=this.options[this.selectedIndex].value NAME='select'>

<option>Filter by Author</option>

<?
include ('db_connect.php');
	$sql= "SELECT * FROM pctbooks GROUP BY ln ORDER BY ln ASC";
	$query= mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)){
echo "<option value='books.php?ln=".$row['ln']."'>".$row['ln']."</option>";
}
?>

</select>


<p1>
<?php
if($_REQUEST['ln']==''){
$sql= "SELECT * FROM pctbooks ORDER BY ln ASC";
$query= mysqli_query($con, $sql);
}

else{
$sql= "SELECT * FROM pctbooks WHERE ln='" .$_REQUEST['ln']."' ORDER BY ln ASC";
$query= mysqli_query($con, $sql);}
while ($row = mysqli_fetch_array($query))

{?>
	<table>
    <table>
      <tr>
        <th style="text-align:left;">Author</th>
        <th style="text-align:center;">Work</th>
        <th style="text-align:center;">Genre</th>
      <!--  <th style="text-align:right;">Summary</th> -->
      </tr>
      <tr>
				<td><?php echo "" . $row['ln']; echo ", " . $row['fn']; ?></td>
		  	<td><?php echo "" . $row['title']; ?></td>
	      <td><?php echo "" . $row['genre']; ?></td>
      <!--  <td><button style="background-color:#79d2ce;" onclick="myFunction()">Read/Write Summary</button><?php echo "" . $row['summary']; ?></td> -->
  		</tr>
  	</table>
	</table>

<?php

}

// Close connection
mysqli_close ($con);

 ?>

</p1>

<div class="push"> </div>

</div>

<?php
include 'footer.php';
?>

</body>
