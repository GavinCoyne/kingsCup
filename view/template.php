<!doctype HTML>
<html>
<head><title><?= $this->title; ?></title></head>

<body>
	
	<div class="content" id="content">
		<?= isset($this->content) ? $this->content : "No content selected"; ?>
	</div>

</body>

</html>