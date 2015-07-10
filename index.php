<!DOCTYPE html>
<html>
	<head>
		<title><?= $_GET["user"] ?> | Beam Theatre Mode</title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="/style.css">
	</head>
	<body>
		<div id="video">
			<div class="overlay starthidden"></div>
			<iframe src="http://beam.pro/embed/player/<?= $_GET["user"] ?>"></iframe>
		</div>
		<div id="chat">
			<div id="chatr">
				<div class="overlay starthidden"></div>
				<iframe src="https://beam.pro/embed/chat/<?= $_GET["user"] ?>"></iframe>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="/main.js"></script>
	</body>
</html>