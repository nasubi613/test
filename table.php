
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="reset.css">
	<title>table</title>
</head>
<body>

<?php
$arr = array();
$fpr = fopen('data.txt', 'r');
while($line = fgets($fpr)){
	$arr = $line;
}
fclose($fpr);
foreach($arr as $val){
	echo $val;
}
?>

<form action="table.php" method="post">
<table>
	<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
	</tr>
	<tr>
		<th>Aさん</th>
		<td><input type="text" name="input01" value="<?=$arr[0]?>"></td>
		<td><input type="text" name="input02" value="<?=$arr[1]?>"></td>
		<td><input type="text" name="input03" value="<?=$arr[2]?>"></td>
	</tr>
	<tr>
		<th>Bさん</th>
		<td><input type="text" name="input04" value="<?=$arr[3]?>"></td>
		<td><input type="text" name="input05" value="<?=$arr[4]?>"></td>
		<td><input type="text" name="input06" value="<?=$arr[5]?>"></td>
	</tr>
	<tr>
		<th>Cさん</th>
		<td><input type="text" name="input07" value="<?=$arr[6]?>"></td>
		<td><input type="text" name="input08" value="<?=$arr[7]?>"></td>
		<td><input type="text" name="input09" value="<?=$arr[8]?>"></td>
	</tr>
</table>
</form>

<?php
$fpw = fopen('data.txt', 'w');
for($i = 1; $i < 10; $i++){
	$selecter = 'input0' + $i;
	
}
$_POST[]
?>

</body>

<style>
* {
	box-sizing: border-box;
}
table {
	background: skyblue;
	border-collapse: collapse;
	margin: 50px auto;
}
table tr th,
table tr td {
	width: 150px;
	border: 1px solid #666;
	padding: 5px;
}
input {
	width: 100%;
}
</style>
</html>