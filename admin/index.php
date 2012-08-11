<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>JSON Editor</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>

		<div class="container">
		
			<header class="subhead" id="overview">
				<h1>Generic JSON Editor</h1>
				<div class="subnav">
					<ul class="nav nav-pills">
						<?php
						if ($handle = opendir('../data')) {
							while (false !== ($entry = readdir($handle))) {
								if ($entry != "." && $entry != ".." && preg_match("/json$/", $entry) ) {
									$tmp = preg_split("/\./", $entry);
									echo '<li><a href="' . $entry . '">' . ucfirst($tmp[0]) . '</a></li>';
								}
							}
							closedir($handle);
						}
						?>
					</ul>
				</div>
			</header>
				
			<div class="well">
				<p>
					Select the file you want to update
				</p>
			</div>
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/json-editor.js"></script>

	</body>
</html>
