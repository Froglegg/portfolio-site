<head>



<?php

include 'head.php';

?>

<title>Portfolio</title>
<style>
@media only screen and (max-width: 768px) {
.accordion {
  font-size:1em;
}

}
</style>
</head>

<script type="text/javascript" src="//cdn.plu.mx/widget-popup.js"></script>

<body>

<div  class="wrapper">

<h1>Portfolio</h1><br>

<?php

include 'navbar.php';

?>

<br>

<button class="accordion">

Websites</button>

<div class="panel">

  <form>

    <br>

    <input class="accordion" type="button" value="Scale x Design" onclick="window.open('http://sxdaccelerator.care.org')" />

    <input class="accordion" type="button" value="Center for Community Transitions" onclick="window.open('http://www.centerforcommunitytransitions.org')" />

    <input class="accordion" type="button" value="Assurant Asia Landing Page" onclick="window.open('http://www.assurant.sg')" />
  <!-- eventually add UK pages you built, here <input class="accordion" type="button" value="UK site I built" onclick="window.open('http://www.centerforcommunitytransitions.org')" /> -->

    <input class="accordion" type="button" value="CARE Switzerland" onclick="window.open('https://www.care-international.ch/')" />

    <input class="accordion" type="button" value="CARE's World of Impact" onclick="window.open('http://worldofimpact.care.org/stories')" />

  </form>

</div>

<button class="accordion">Digital Projects</button>

<div class="panel">

  <form>

    <br>

<input class="accordion" type="button" value="Automating with Python" onclick="window.open('https://github.com/Froglegg/budou_file_output','_self')" />

<input class="accordion" type="button" value="PHP/SQL Storybook" onclick="window.open('storybook.php','_self')" />

<input class="accordion" type="button" value="API Calls with PHP" onclick="window.open('api.php','_self')" />

<input class="accordion" type="button" value="PHP/SQL PCT Book List" onclick="window.open('books.php','_self')" />

<input class="accordion" type="button" value="JQuery Questionnaire" onclick="window.open('quiz.php','_self')" />

<input class="accordion" type="button" value="Javascript Magic 8 Ball" onclick="window.open('8ball.php','_self')" />

<input class="accordion" type="button" value="Javascript Slot Machine" onclick="window.open('slotmachine.php','_self')" />

<input class="accordion" type="button" value="CSS Spooky Ghost" onclick="window.open('spooky-ghost.php','_self')" />

<input class="accordion" type="button" value="Swamp Wars Scratch Game" onclick="window.open('http://scratch.mit.edu/projects/303546804/','_self')" />

<input class="accordion" type="button" value="View my Codepen" onclick="window.open('https://codepen.io/froglegg/')" />

<input class="accordion" type="button" value="View my Git" onclick="window.open('https://github.com/Froglegg')" />
</form>

</div>

<button class="accordion">

Documentation/Copywriting</button>

<div class="panel">

    <form>

      <br>

    <input class="accordion" type="button" value="A.com Sharepoint Documentation" onclick="window.open('files/docs/assurant-technical-documentation.pdf')" />

    <input class="accordion" type="button" value="Copywriting for AEC" onclick="window.open('files/docs/aec_copywriting.pdf')" />

    <input class="accordion" type="button" value="Team Briefs for Scale X Design" onclick="window.open('files/docs/team_briefs.pdf')" />

    <input class="accordion" type="button" value="CARE Human Interest Stories" onclick="window.open('files/docs/editing_sample.pdf')" />

    <input class="accordion" type="button" value="CARE Grant Proposal" onclick="window.open('files/docs/acard.pdf')" />

    <input class="accordion" type="button" value="Content-Editor Guide" onclick="window.open('files/docs/user_guide.pdf')" />

    <input class="accordion" type="button" value="Master's Thesis: Thru-hiking and Why People Do It" onclick="window.open('https://scholarworks.gsu.edu/english_theses/229/')" />

    <input class="accordion" type="button" value="English 1101 Syllabus (.doc)" onclick="window.open('files/docs/1101_syllabus.doc')" />

    </form>

</div>

<script>

var acc = document.getElementsByClassName("accordion");

var i;



for (i = 0; i < acc.length; i++) {

    acc[i].addEventListener("click", function() {

        this.classList.toggle("active");

        var panel = this.nextElementSibling;

        if (panel.style.display === "block") {

            panel.style.display = "none";

        } else {

            panel.style.display = "block";

        }

    });

}

</script>





<div class="push"> </div>

</div>



<?php

include 'footer.php';

?>



</body>
