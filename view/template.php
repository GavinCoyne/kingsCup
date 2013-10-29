<!doctype HTML>
<html>
<head><title><?= $this->title; ?></title>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script src="./media/js/jquery-2.0.3.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="./media/js/system.js"></script>

</head>

<body>
	
	<div class="container" id="container">
	<div id="dialog" class="success">Test</div>
		<?= isset($this->content) ? $this->content : "No content selected"; ?>
	</div>

</body>

</html>