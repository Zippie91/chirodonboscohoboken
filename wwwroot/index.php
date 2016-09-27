<?php ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Chiro Don Bosco Hoboken</title>
  <link rel="shortcut icon" href="/images/chirologo_rounded_64.ico">
  <!-- Normalize CSS -->
  <link href="/node_modules/normalize.css/normalize.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
  <!-- Optional Bootstrap Theme
  <link href="/node_modules/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet"> -->
  <!-- Custom Styles -->
  <link href="/css/custom_main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
  <?php include('partials/main/mainnav.php'); ?>
  <div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
      <?php 
	  if(!empty($_GET['page']) {
	    switch($_GET['page']) {
		  default: 
		    include('partials/home/homepage.php');
		    break;
	    }
	  } 
	  else {
		include('partials/home/homepage.php');
	  }
	  ?>
      <?php include('partials/main/sidebar.php'); ?>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/js/offcanvas.js"></script>
</body>
</html>
