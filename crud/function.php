<?php
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
			<h1>CRUD Data Pegawai</h1>
			<a class="custom-control custom-switch"> <input type="checkbox" class="custom-control-input" class="custom-control custom-switch" id="darkSwitch" />
			<label class="custom-control-label" for="darkSwitch">Dark Mode</label> </a>
			<a href="logout.php"><i class="fas"></i>Log Out</a>
			
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>