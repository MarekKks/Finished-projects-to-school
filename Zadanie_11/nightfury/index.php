<?php



	include 'header.php';
	
	?>

</head>
<body>
<?php

/*
if (isset($_GET['pageid'])) {	
$action = $_GET['pageid'];
$action = basename($action);
include("index.php");
}else {
	include("portfolio/all.php");
}
*/

$page = isset ($_GET['pageid']) && !empty($_GET['pageid']);
if (isset($_GET['pageid']) && !empty($_GET['pageid'])) {	
	switch($page)
	{
		default:
			include_once('portfolio/'.$_GET['pageid'] ); 
		break;
		case 'Branding':
			include_once('portfolio/'.$_GET['pageid'] ); 
		break;
		case 'fotografia':
			include_once('portfolio/'.$_GET['pageid'] ); 
		break;
		case 'video':
			include_once('portfolio/'.$_GET['pageid'] ); 
		break;
		case 'web':
			include_once('portfolio/'.$_GET['pageid'] ); 
		break;
}};




?>
	<!-- scripts -->
	<script src="js/lightbox.js"></script>

<?php

include 'footer.php';

?>
</body>
</html>