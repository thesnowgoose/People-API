<?php
	include "backend.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gmail autocomplete</title>
	<link rel="stylesheet" href="public/css/styles.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
</head>
<body>
		<div class="wrapper">
		  <?php if (isset($_SESSION["token"])) { ?>
		   	  <label for="txtSearch">Search your contacts:</label>
					<i class="fa fa-search">hola</i>
		      <input type="text" id="txtSearch">
	      <?php }else { ?>
					<a href="<?= $authUri; ?>" class="button">Provide Access</a>
				<?php } ?>
	      <div id="results"></div>
			</div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
      <script type="text/javascript" src="app.js"></script>
</body>
</html>
