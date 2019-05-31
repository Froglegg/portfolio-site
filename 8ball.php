  <head>

    <?php include 'head.php'; ?>

    <title>JS Magic 8 Ball</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/8ballstyles.css?<?php echo time(); ?>">

    <script src="scripts/8ball.js" defer></script>

    <meta name="description" content="A JavaScript magic 8-ball">

  </head>

  <body>

    <div  class="wrapper">

    <h1>Javascript Magic 8 Ball</h1>

    <?php

    include 'navbar.php';

    ?>

    <br>

    <p1>Type in your question:</p1>

    <br>



    <input type="text" id="input" />



    <div class="eight-ball">

      <div class="answer">

        <p id="eight">8</p>

        <p id="answer"></p>

      </div>

    </div>

    <button id="button">

      Shake

    </button>

    <br>

    <!-- <p1> Based on code written by <a href="https://medium.com/@kellylougheed/javascript-magic-8-ball-with-basic-dom-manipulation-1636b83c3c26" style="color:#2b1818!important; font-weight: 900!important;">Kelly Lougheed.</a></p1> !-->



    <div class="push"> </div>



    </div>



    <?php

    include 'footer.php';

    ?>



    </body>

