<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site Title</title>

	<!-- CSS load -->
	<link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>assets/css/style.css">
	
</head>
<body>

	<h1>Olá <?= $userName; ?>!</h1><hr/>

	{{content}}

	<hr/><h1><?= date('d/m/Y \à\s H:m:i'); ?></h1>

	<!-- JS load -->
	<script type="text/javascript">var baseUrl = '<?= $baseUrl; ?>'</script>
	<script type="text/javascript" src="<?= $baseUrl; ?>assets/js/script.js"></script>
</html>