<head>
<?php
include 'head.php';
?>

<script src="scripts/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="/styles/font_awesome/fontawesome-all.css" rel="stylesheet">

<title> API CALLS </title>
<meta description="API Calls demo">
</head>
<body>

<div  class="wrapper">

<h1> API Calls </h1>

<?php
include 'navbar.php';
?>
<br><br>
<p1> API calls using Contentful and PHP in bootstrap modal windows</p1>
<br><br>
<p1>
  <br>
  <?php
  require_once __DIR__ . '/vendor/autoload.php';

  $spaceID = '0l0vljwn0ihl';
  $accessToken = '2531712f07175c3528fbc924a4b5677505321f22e7b09c23651615f9ea398955';

  $client = new \Contentful\Delivery\Client($accessToken, $spaceID);

  $query = new \Contentful\Delivery\Query();
  $query->setContentType('story')
  ->orderBy('fields.title');


  $stories = $client->getEntries($query);
  foreach ($stories as $story)
  {

  ?>
      <table>
        <tr>
          <th>Title</th>
          <th>Summary</th>
          <th>Body</th>
          <th>Quote</th>
        </tr>
        <tr>
  				<td><p1><?php echo "" . $story->title; ?></p1></td>
  		  	<td><p1><?php echo "" . $story->summary; ?><p1></td>
  	      <td>
            <button type="button" class="button" data-toggle="modal" data-target="#myModal<?php echo $story->getTitle(); ?>"><p1>Read Description</p1></button>
            <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo $story->getTitle(); ?>" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2><?php echo "" . $story->getTitle(); ?></h2>
                  </div>
                  <div class="modal-body overflow-scroll">
                    <p1><?php echo "" . $story->getBody(); ?></p1>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="button" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
</td>
          <td><p1><?php echo "" . $story->quote; ?></p1></td>
    		</tr>
    	</table>
<?
}
?>
<br><br>
<div class="push"> </div>

</div>

<?php
include 'footer.php';
?>

</body>
