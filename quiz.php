<head>



  <?php include 'head.php'; ?>



  <title>Hiring Questionnaire</title>



  <meta charset="utf-8">



  <meta http-equiv="X-UA-Compatible" content="IE=edge">



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <meta name="description" content="Hiring Risk Checklist">



  <style>

/* table css */

table {

 border-collapse: collapse;

 width: 100%;

}

td,

th {

 border: 1px solid #dddddd;

 text-align: left;

 padding: 8px;

}

th {

 background-color: #17252A;

}



.highlight:after {

  content: "\2713"

}



/* Added CSS rule */

#countit tr td:nth-child(3) , #countit tr td:nth-child(2) {

  cursor:pointer;

}



#countit tr td:nth-child(3):active , #countit tr td:nth-child(2):active {

  transform: translateY(8px);

}



.hidden {

  display:none;

}



</style>



</head>



<body>



  <div  class="wrapper">



  <h1>Hiring Questionnaire</h1>

  <br><br><br>



  <?php



  include 'navbar.php';



  ?>



<br />

<div class="container">

    <div>

        <p1>Use this free-range, 100% organic JQuery checklist to determine whether I would be a good fit for your team. The higher the number, the better I'd get along at your workplace.

        </p1><br><br>

        <table class="table table-striped k-table"id="countit">

            <thead>

                <tr>

                    <th>&nbsp;</th>

                    <th style="color:#dddddd;">YES</th>

                    <th style="color:#dddddd;">NO</th>

                </tr>

            </thead>

            <tbody >

                <tr >

                    <td>1. Are you looking for a promising junior or entry-level web developer / CMS ninja?</td>

                    <td class="count-me"><span class="hidden">75</span></td>

                    <td class="count-me"><span class="hidden">0</span></td>

                </tr>

                <tr >

                    <td >2. Does this developer need to have experience with either writing CSS (grids/flex/bootstrap), Javascript/JQuery, PHP, MySQL, and/or API calls? </td>

                    <td class="count-me"><span class="hidden">75</span></td>

                  <td class="count-me"><span class="hidden">0</span></span></td>

                </tr>

                <tr >

                    <td>3. Should this developer be a total n00b to content management systems such as WordPress, Drupal, SiteFinity, and/or headless CMS's (such as Contentful)?</td>

                    <td class="count-me"><span class="hidden">0</span></td>

                    <td class="count-me"><span class="hidden">30</span></td>

                </tr>

                <tr >

                    <td>4. Do you have fizzy drinks at the office? </td>

                    <td class="count-me"><span class="hidden">5</span></td>

                    <td class="count-me"><span class="hidden">0</span></td>

                </tr>

                <tr >

                    <td>5. Are you looking for someone who loves learning new stuff?</td>

                    <td class="count-me"value="30"><span class="hidden">35</span></td>

                    <td class="count-me"><span class="hidden">0</span></td>

                </tr>

                <tr >

                    <td >6. In the event that I am hired, will you be paying me?</td>

                    <td class="count-me"><span class="hidden">5</span></td>

                    <td class="count-me"><span class="hidden">0</span></td>

                </tr>

                <tr>

                    <td>7. Do the majority of people at your company hate working there?</td>

                    <td class="count-me"><span class="hidden">0</span></td>

                    <td class="count-me"><span class="hidden">35</span></td>

                </tr>

                <tr >

                    <td>8. Would it be cool if this developer also had some Photoshop skills?</td>

                    <td class="count-me"><span class="hidden">35</span></td>

                    <td class="count-me"><span class="hidden">0</span></td>

                </tr>

                <tr >

                    <td >9. How about some data analytics/SEO/CRM knowledge?</td>

                    <td class="count-me"><span class="hidden">35</span></td>

                    <td class="count-me"><span class="hidden">0</span></td>

                </tr>


                <!-- add the total points row here -->

                <tr></tr>

            </tbody>

        </table>

        <div style="text-align:right;">

            <h4>YOUR TOTAL POINTS<br />[&nbsp; &nbsp;<span class="sum">0</span>&nbsp; &nbsp;]</h4>

            <p1>Total points possible: 320 </p1>

        </div>

    </div><br /></div>

    <script>

    // quiz script

$(document).ready(function() {



  // Use a variable to reduce the amount of jQuery lookups.

  var yesNoColumns = $("#countit tr td:nth-child(3), #countit tr td:nth-child(2)");





  // Click handler on yes/no

  yesNoColumns.click(function(e) {

    // $(this) is the clicked TD

    var clickedCell= $(this);



    // Remove any previou highlights on the clicked row

    clickedCell.parent("tr").find("td:nth-child(3), td:nth-child(2)").removeClass("highlight");



    // Add the highlight on the clicked cell

    clickedCell.addClass("highlight");



    // Show the value of the clicked cell

    $("#spnText").html(

      'Clicked table cell value is: <b> ' + clickedCell.val() + '</b>');





    // This looksup for all yes/no cells

    var tds = $('#countit').find('td.count-me');



    // Count the sum on every click (That why the loop now is in the click handler)

    var sum = 0;

    for(var i = 0; i < tds.length; i ++) {

      if(tds.eq(i).hasClass('count-me') && tds.eq(i).hasClass('highlight') ) {

        sum += isNaN(tds.eq(i).text()) ? 0 : parseInt(tds.eq(i).text());

      }

    }



    // This outputs the sum total of the tds.

    // Only the .sum SPAN is updated

    $('.sum').text(sum);

  });

});

</script>

<div class="push"> </div>







</div>







<?php



include 'footer.php';



?>







</body>
