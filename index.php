<?php
	include "backend.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gmail autocomplete</title>
	<link rel="stylesheet" href="public/css/styles.css" >
</head>
<body>
	  <?php if (isset($_SESSION["token"])) { ?>
   	  Search your contacts:<br>
      <input type="text" id="txtSearch" name="search">
      <?php }
      else {
      	?> <a href="<?= $authUri; ?>">Provide Access</a> <?php
      }
      ?>
      <div id="results"></div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
      <script type="text/javascript" src="app.js"></script>
</body>
</html>
