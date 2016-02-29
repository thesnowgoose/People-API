<?php
	include "backend.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gmail autocomplete</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="public/css/styles.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
</head>
<body>
		<div class="wrapper">
		  <?php if (isset($_SESSION["token"])) { ?>
				<div class="form">
					<label for="txtSearch">Search your contacts:</label>
					<div class="search-field">
						<i class="fa fa-search"></i>
			      <input type="text" id="txtSearch">
					</div>
				</div>
	      <?php }else { ?>
					<a href="<?= $authUri; ?>" class="button">Provide Access</a>
				<?php } ?>
	      <div id="results"></div>
			</div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
      <script type="text/javascript" src="app.js"></script>
</body>
</html>
