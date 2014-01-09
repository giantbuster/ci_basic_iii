<!DOCTYPE html>
<html>
<head>
	<title>Random Word Generator</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/global.css">
</head>
<body>
<div id="container">
	<p>Random Word (attempt #<?= $this->session->userdata('count') ?>)</p><br>
	<h1><?= $word ?></h1>
	<br>
	<form action="<?= base_url() ?>home" method="post">
		<input type="submit" value="Generate">
	</form>
</div>
</body>
</html>