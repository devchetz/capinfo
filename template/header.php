<?php

# Start the session:
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
}


?>

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
	
	/* Sticky footer styles */
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  /* Margin bottom by footer height */
	  margin-bottom: 60px;
	}
	#footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	  background-color: #8c8c59;
	}

</style>

</head>
<div id="wrap">
	<?php include(D_TEMPLATE.'/nav.php'); // Main Navigation ?>