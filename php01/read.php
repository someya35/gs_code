<?php
$filename = 'data/data.txt';//ファイルを変数に格納
$lines =file($filename);//ファイルを配列に格納し、さらに変数に格納

// $file = fopen("data/data.txt","a");	// ファイル読み込み
// fread($file, $str."\n");//読み込み

?>

<html>
<head>
<meta charset="utf-8">
<title>File読み込み</title>
</head>
<body>
<h1>表示</h1>
<?php print_r($lines); ?>



<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>