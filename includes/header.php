<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- header file for Riverview website -->
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content="IE=edge">
	<meta name = "viewport" content="width=device-width, initial-scale=1">

	<meta property = "fb:app_id" content = "" />
	<meta property = "og:title" content = "Riverview Sober House" />
	<meta property = "og:url" content = "http://riverviewsoberhouse.com/" />
	<meta property = "og:description" content = "Located in New Haven, CT, Riverview Sober House is a spacious, high quality home like sober living environment that is a great place for recovery." />
	<meta property = "og:image" content = "http://riverviewsoberhouse.com/images/riverview-quinnipiac-river-small.jpg" />
	<meta property = "og:image:alt" content = "Image of the river" />
	<meta property = "og:type" content = "website"/>

	<title><?php echo $page_title; ?></title>
		
	<meta property="description" content="Located in New Haven, CT, Riverview Sober House is a spacious, high quality home like sober living environment that is a great place for recovery." />
	
	<meta property = "author" content="Robert Mroczka - Artistic Document Designs" />

	<!-- Bootstrap & CSS -->
	<link rel = "stylesheet" href = "./css/bootstrap.css" />
	<link rel = "stylesheet" href = "./css/style.css" />
	<link rel="stylesheet" href="./css/blueimp-gallery.min.css">


	<!-- favicons -->
	<?php include_once("./includes/favicon.php") ?>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<?php #Hashing Function
		$keywords = array("sober",
		"sober house",
		"sober living",
		"recovery",
		"New Haven",
		"Connecticut",
		"Riverview Sober House",
		"addiction treatment",
		"clean living",
		"CT");

		$hash = crc32($_SERVER['HTTP_HOST']);
		$index = $hash % count($keywords);
	?>
	

</head>

<body>
<?php include_once("./includes/analyticstracking.php") ?>
<?php include_once("./includes/main_nav.php") ?>