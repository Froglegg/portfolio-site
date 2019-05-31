<head>
<meta charset="utf-8"/>
<html lang="en-US">


<!--this be your meta section; 'viewport' is for responsive design, don't set overly large widths!-->

<meta name="keywords" content="Hayes Crowley, Richard Hayes Crowley, Hayes, Crowley, Atlanta, Asheville, web, web development, proposal writing, grant writing, technical writing, writing, editing, copy, copy writing, copy editing">
<meta name="description" content="I'm Hayes, Hello.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- this be your favicon-->

<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<!--these be your styles-->

<link rel="stylesheet" type="text/css" href= "styles/normalize.css?<?php echo time(); ?>">

<link rel="stylesheet" type="text/css" href= "styles/font_awesome/fontawesome-all.css?<?php echo time(); ?>" media="screen">

<link rel="stylesheet" type="text/css" href= "styles/theme1.css?<?php echo time(); ?>" media="screen">

<link rel="stylesheet" media="screen and (max-width: 768px)" href="styles/mobile-styles.css?<?php echo time(); ?>" media="screen">


<!--these be your google fonts-->
<link href="https://fonts.googleapis.com/css?family=Karla|Montserrat|Open+Sans" rel="stylesheet">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119518899-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119518899-3');
</script>

<!-- jquery -->
<script src="scripts/jquery.js"></script>

<script>
jQuery(document).ready(function( $ ){
// Get page title
                var pageTitle = $("title").text();
// Change page title on blur
$(window).blur(function() {
$("title").text("Pssst, come back! ❤");
                });

                // Change page title back on focus
                $(window).focus(function() {
$("title").text(pageTitle);
                });
});</script>



</head>
