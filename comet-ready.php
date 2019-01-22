<?php
	wp_enqueue_style("ccadmin", plugin_dir_url( __FILE__ ).'css/comet-ready.css');
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
	<div class="cometchat">
		<div class="comet-locked-layout">
			<img class="cometchat-logo" src=<?php echo $cometchatDockedLayout;?> />
		</div>
		<div class="comet-installation-successs">
			<div class="comet-content">
				<img class="cometchat-logo-image" src=<?php echo $cometchatLogo;?>>
				<h2>CometChat Docked Layout</h2>
				<p style="font-weight: 700;">CometChat has been successfully installed on your site. </p>
				<p>We have pre-enabled our Docked Layout for your convenience. </p>
				<div>
					<button type="submit" value = "submit" id = "save" class = "button-primary" onclick="window.open('<?php echo $adminpanelurl; ?>');">Launch Admin Panel</button>
					<button type="submit" value = "submit" id = "save" class = "button-primary" onclick="window.location.reload();">Go To Settings</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>