<head>

<?php

include 'head.php';

?>

<script src="scripts/jquery.js"></script>

<link href="/styles/font_awesome/fontawesome-all.css" rel="stylesheet">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title> Story Book </title>

<meta description="A collection of short stories and quotes">

</head>

<body>



<div  class="wrapper">



<h1> MySQL/PHP Storybook </h1>

<br> <br> <br>



<?php

include 'navbar.php';

?>

<br>

<h2 style="text-align: center;">All user input is sanitized (can't hack me!) </h2>

<p1>This storybook uses MySQL and PHP to add, edit, filter and delete "stories" in a MySQL database I set up on SiteGround. The modal windows are bootstrap. </p1><br>

<br>





<button class="button" style="border: 1px double #17252A!important;"> <a href="storybook_add.php" style="color:#17252A;">Add a Story</a></button>



<select class="submitted_select" onchange=location.href=this.options[this.selectedIndex].value NAME='select' id='select'>



  <option>Date Submitted



    <?php

   include ('db_connect.php');

   echo "<option value='storybook.php'>See All</option>";

   if(null !==($_REQUEST['select'])){

    $sql= "SELECT * FROM notes GROUP BY submitted ORDER BY submitted DESC";

    $query= mysqli_query($con, $sql);

  }

  else{

    $sql= "SELECT * FROM notes GROUP BY submitted ORDER BY submitted DESC";

    $query= mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($query)){

    echo "<option value='storybook.php?submitted=".$row['submitted']."'>".$row['submitted']."</option>";

    }

  }

    ?>

  </option>



</select>

<br>



<!--

<SELECT class="button" style="background-color:#79d2ce;" onchange=location.href=this.options[this.selectedIndex].value NAME="select_author" id="select_author">



<option>Author



<?

include ('db_connect.php');

 echo "<option value='storybook.php'>See All</option>";

 if(null !==($_REQUEST['select_author'])){

  $sql= "SELECT * FROM notes GROUP BY submitted ORDER BY submitted DESC";

  $query= mysqli_query($con, $sql);

}

else{

  $sql= "SELECT * FROM notes GROUP BY author ORDER BY author ASC";

  $query= mysqli_query($con, $sql);

  while ($row = mysqli_fetch_array($query)){

  echo "<option value='storybook.php?author=".$row['author']."'>".$row['author']."</option>";

  }

}

  ?>



</option>



</select>



!-->

<p1>

  <br>



  <?php



  if($_REQUEST['submitted']==''){

  $sql= "SELECT * FROM notes ORDER BY submitted DESC";

  $query= mysqli_query($con, $sql);

  }



  else{

  $sql= "SELECT * FROM notes WHERE submitted='" .$_REQUEST['submitted']."' ORDER BY submitted DESC";

  $query= mysqli_query($con, $sql);}

  while ($row = mysqli_fetch_array($query))







  {?>

      <table>

        <tr>

          <th>Title</th>

          <th>Author</th>

          <th>Description</th>

          <th>Submitted</th>

          <th>Edit</th>

        </tr>

        <tr>

  				<td><p1><?php echo "" . $row['title']; ?></p1></td>

  		  	<td><p1><?php echo "" . $row['author']; ?><p1></td>

  	      <td>

  <button type="button" class="button" data-toggle="modal" data-target="#myModal<?php echo $row['id']?>"><p1>Read Description</p1></button>

  <!-- Modal -->

  <div class="modal fade" id="myModal<?php echo $row['id']?>" role="dialog">

    <div class="modal-dialog">



      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h2><?php echo "" . $row['title']; ?> <p1><i>by <?php echo "" . $row['author']; ?></strong></i></h2>

        </div>

        <div class="modal-body">

          <p1><?php echo "" . $row['description']; ?></p1><br><br>

        </div>

        <div class="modal-footer">

          <button type="button" class="button" data-dismiss="modal">Close</button>

        </div>

      </div>



    </div>

  </div>

          </td>

          <td><p1><?php echo "" . $row['submitted']; ?></p1></td>

          <?php echo "<td><p><a style='padding:5px;background-color:#2B7A78;' href=\"delete.php?id=".$row['id']."\">Delete</a></p><p><a style='padding:5px;background-color:#2B7A78;' href=\"storybook_edit.php?id=".$row['id']."\">Edit</a></p></td>";?>

    		</tr>

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

