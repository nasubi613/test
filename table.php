
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>table</title>
</head>
<body>

<?php
$arr = array();
$fp = fopen('data.txt', 'r');
while($line = fgets($fp)){
	$arr = $line;
}
fclose($fp);
?>
<table>
	<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
	</tr>
</table>

</body>
</html>