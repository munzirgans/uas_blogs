<?php
	include 'conn.php';
	include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BLOG 23</title>
	<link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
	<div class="top-gray"></div>
	<div class="header">
		<div class="big-logo">Munzir's Blog</div>
		<?php include 'menu.php';?>
	</div>
	<div class="content">
		<div class="container">
			<?php
				if(!is_null(get('p'))){
					switch (get('p')) {
						case 'home':
							inc('home');
							break;
						case 'artikel':
							switch (get('m')) {
								case 'home':
									inc('tampilan/artikel/all');
									break;
								case 'add':
									inc('tampilan/artikel/add');
									break;
								case 'edit':
									inc('tampilan/artikel/edit');
								default:
									inc('tampilan/artikel/all');
									break;
							}
							break;
						default;
							inc('home');
							break;
					}
				}else{ inc('home'); } ?>
		</div>
	</div>
</body>
</html>