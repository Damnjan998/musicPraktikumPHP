<?php
   if(isset($_GET['page'])){
       $page=$_GET['page'];
   }else{
      $page="Home";
   }
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Music-Box | <?= strtoupper($page) ?></title>
	<link rel="icon" href="assets/images/tab.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Askovic Damnjan 174.17"/>
	<meta name="keywords" content="Music, Albums, Artists, Online-Shop"/>
	<meta name="language" content="English"/>
	<meta name="description" content="If you searching for a good music, you are at the right place, ENJOY!">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<?php
		if(isset($_GET['page'])){
			$strana = strtolower($_GET['page']);
			if($strana == 'contact'){
				echo "<script src='assets/js/contact.js' type='text/javascript'></script>";
			} else if($strana == 'login' || $strana == 'register'){
				echo "<script src='assets/js/login.js' type='text/javascript'></script>";
			}
		}
	?>
	<!--slider-->
	<!-- flipster -->
	<link rel="stylesheet" href="assets/css/jquery.flipster.css">
	<script type="text/javascript" src="assets/js/modernizr.custom.53451.js"></script>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.gallery.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#dg-container').gallery({
				autoplay: true
			});
		});
	</script>
</head>
		