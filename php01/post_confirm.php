<?php
$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];

//File書き込み
//課題は名前とメールの変数をカンマ区切りの文字列にして
//ファイルに書き込めるようにしてください

// 文字列イメージ
// 例） yamazaki , test@test.jp
// daisu yamazaki12:16
// 確認のURL（必ずここから）
// localhost/php01/post.php
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $****."\n");
fclose($file);

// if($name==""){
//     $name = "未入力です";
// }
// if($mail==""){
//     $mail = "未入力です";
// }
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo $name; ?>
EMAIL：<?php echo $mail; ?>

<?php

?>
<button>登録</button>
<?php

?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>