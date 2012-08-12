<?php
	$conf = json_decode(file_get_contents("../conf.json"));
	$path = $conf->path;
	// $item = $conf->items[$_POST['id']];
	$item = $conf->items[$_REQUEST['id']];

	$content = json_decode( file_get_contents( "../" . $path->data . $item->url ) );
?>
	<form class="form-horizontal">
		<?php formPartial( $content, false ); ?>

		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Save changes</button>
			<button class="btn">Cancel</button>
		</div>
	</form>
	
<?php
	function formPartial ( $content, $isClosed = true ) {

		echo '<fieldset>';
		foreach ($content as $label => $partial) {

			$type = gettype($partial);
			
			if ( $type === "object" || $type === "array" ) {

				echo '<legend>' . ucfirst($label) . '</legend>';
				formPartial($partial);

			} else {

				echo '<div class="control-group">';
					echo '<label class="control-label">' . $label . '</label>';
					echo '<div class="controls">';
					if ( $label === "text" ) {
						echo '<textarea class="input-xxlarge" rows="5">' . $partial . '</textarea>';
					} else {
						echo '<input type="text" class="input-xxlarge" value="' . $partial . '"/>';
					}
					echo '</div>';
				echo '</div>';
			}

		}
		echo '</fieldset>';
	}
?>