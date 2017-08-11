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
	  background-color: #f5f5f5;
	}
	
	#btn-debug {
		position: absolute;
	}	
	
	#console-debug {
		position: absolute;
		top: 50px;
		left:0px;
		width:30%;
		height:700px;
		overflow-y:scroll;
		background-color: #FFFFFF;
		box-shadow: 2px 2px 5px #CCCCCC;
	}
	#console-debug pre {
		
		
	}
	
	
</style>

</head>
<div id="wrap">
	<?php include(D_TEMPLATE.'/nav.php'); // Main Navigation ?>