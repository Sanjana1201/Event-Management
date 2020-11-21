<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>
            <div align="center">
            <legend>List of Events</legend></fieldset>
			<?php
				include_once("eventlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>List of Description</legend></fieldset>
			<?php 
              include_once("desclist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			
			
			<legend>List of time</legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>