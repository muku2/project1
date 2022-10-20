<!DOCTYPE html>
<html>
<head>
	<title>Tin tức</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="tin_tuc/layout.css" type="text/css">
</head>
<body>
<?php
	$ma = $_GET['ma'];
	$thu_muc_anh = 'images/tin_tuc/';
	include 'connect.php';
	$sql = "select * from tin_tuc limit 1";
	$result = mysqli_query($connect,$sql);
?>

<?php foreach ($result as $each): ?>
<div class="wrapper row2">
	<div id="container" class="clear">
		<h1><?php echo $each['tieu_de']?></h1>
		<br>
		<img height="900" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
		<br><br>
		<p><h3><?php echo $each['noi_dung']?></h3></p>
		<br><br><hr width="50%">
	</div>
</div>
<?php endforeach ?>
<div align="center">
	<a href="tin_tuc.php">Trang truowsc</a>
</div>
</body>
</html>