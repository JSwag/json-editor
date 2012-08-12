<?php
	$conf = json_decode(file_get_contents("conf.json"));
	$items = $conf->items;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>JSON Editor</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

		<div class="container">
			<div class="page-header">
				<h1>Admin <small>of the website</small></h1>
			</div>
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<?php 
					$i = 0;
					foreach ( $items as $item ) {
						echo '<li><a href="#" data-id="' . $i . '">' . $item->label . '</a></li>';
						$i++;
					}
					?>
				</ul>
				<div class="tab-content" id="content" data-img="<?php echo $conf->path->img; ?>" data-json="<?php echo $conf->path->data; ?>">
					<p>
						Select the file you want to update
					</p>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/json-editor.js"></script>

	</body>
</html>
