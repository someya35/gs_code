<?php
//文字作成
//$str = date("Y-m-d H:i:s");
$name = $_POST["name"];//ここで情報をキャッチ
$mail = $_POST["mail"];
$sex = $_POST["sex"];
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, "名前:".$name."　メール:".$mail."　性別:".$sex."\n");//書き込み
fclose($file);//閉じる
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="read.php">読み込む</a></li>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>