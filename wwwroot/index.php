<?php setlocale(LC_ALL, "nl_BE"); ?>
<?php define(TITLE, "Chiro Don Bosco Hoboken"); ?>
<?php define(PAGE, ucfirst($_GET['page'])); ?>
<?php include("classes/DB.class.php"); ?>
<?php include("classes/Dropdown.class.php"); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title><?php echo PAGE ? (PAGE == "Home" ? TITLE : PAGE . " - " . TITLE) : TITLE; ?></title>
  
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/images/favicons/manifest.json">
  <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#000064">
  <link rel="shortcut icon" href="/images/favicons/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Chiro Don Bosco">
  <meta name="application-name" content="Chiro Don Bosco">
  <meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
  <meta name="theme-color" content="#cc0033">

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
  <?php $db = new DB(); ?>
  <?php $afd = new Dropdown($db); ?>
  <?php include('partials/main/mainnav.php'); ?>
  <div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
      <?php
	    if(isset($_GET['page'])) {
	      switch($_GET['page']) {
          case 'home':
            include('partials/home/homepage.php');
			      break;
		      case 'afdelingen':
            include('partials/afdelingen/afdelingen.php');
            break;
		      case 'werkgroepen':
			      include('partials/werkgroepen/werkgroepen.php');
			      break;
		      case 'verhuur':
			      include('partials/verhuur/verhuur.php');
			      break;
		      case 'contact':
			      include('partials/contact/contact.php');
			      break;
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
  <?php $db = null; ?>
</body>
</html>
