<?php include 'config/setup.php'; ?>

<!DOCTYPE html>

<head>
	<title>All Record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="config/img/favicon.png">

	<!-- Capinfo Bootstap -->
	<link rel="stylesheet" type="text/css" href="config/css/capinfo.css">
	<link rel="stylesheet" type="text/css" href="config/css/capinfo.theme.css">

	<!-- siimple style -->
	<link rel="stylesheet" type="text/css" href="config/css/style.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<style>
	
	html,
	body {
	  height: 100%;
	  /* The html and body elements cannot have any padding or margin. */
	}
	
	/* Wrapper for page content to push down footer */
	#wrap {
	  min-height: 100%;
	  height: auto;
	  /* Negative indent footer by its height */
	  margin: 0 auto -60px;
	  /* Pad bottom by footer height */
	  padding: 0 0 60px;
	}
	
	/* Set the fixed height of the footer here */
	#footer {
	  height: 60px;
	  background-color: #8c8c59;
	}
	
	#btn-debug {
		position: absolute;
	}	
		
</style>

</head>
<div id="wrap">

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="login.php">All Records</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Sign up</a></li>
		<li><a href="login.php">Sign in</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>