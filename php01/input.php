<?php
$name = $_POST["name"];//ここで情報をキャッチ
$mail = $_POST["mail"];
$sex = $_POST["sex"];
?>

<html>
<head>
<meta charset="utf-8">
<title>課題テンプレート</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	性別: <input type="text" name="sex">

	<input type="submit" value="送信">
</form>
</body>
</html>