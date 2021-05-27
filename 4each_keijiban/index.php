<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt=$pdo->query("select * from 4each_keijiban");
?>


<div class="logo">
<img src="4eachblog_logo.jpg">
</div>


<header>
<ul>
<li>トップ</li>
<li>プロフィール</li>
<li>4eachについて</li>
<li>登録フォーム</li>
<li>問い合わせ</li>
<li>その他</li>
</ul>
</header>

<div class="main">
<div class="left">

<h1>プログラミングに役立つ掲示板</h1>

<form action="insert.php" method="post">
  <div class="form">
    <h2>入力フォーム</h2>
  </div>

<div class="form">
<label>ハンドルネーム</label>
<br>
<input type="text" name="handlename" class="text" size=40>
</div>

<div class="form">
<label>タイトル</label>
<br>
<input type="text" name="title" class="text" size=40>
</div>

<div class="form">
<label>コメント</label>
<br>
<textarea name="comments" rows="10" cols="60" class="text"></textarea>
</div>

<div class="form">
  <input type="submit" value="送信する" class="submit">
</div>

</form>
<?php
while($row=$stmt->fetch()){

echo "<div class='main1'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
echo $row['comments'];
echo "<div class='handlename'>posted by".$row['handlename']."</div>";
echo "</div>";
echo "</div>";

}

?>
<?php
echo "<div class='main1'>";

echo "<h3>タイトル</h3>";
echo "<div class='contents'>";
echo "記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。";
echo "<div class='handlename'>posted by 通りすがり</div>";
echo "</div>";
echo "</div>";
?>

</div>


<div class="right">
<h3>人気の記事</h3>
<ul>
<li>PHPオススメ本</li>
<li>PHP MｙAdminの使い方</li>
<li>今人気のエディタ Top5</li>
<li>HTMLの基礎</li>
</ul>

<h3>オススメリンク</h3>
<ul>
<li>インターノウス株式会社</li>
<li>XAMPPのダウンロード</li>
<li>Eclipseのダウンロード</li>
<li>Bracketsのダウンロード</li>
</ul>

<h3>カテゴリ</h3>
<ul>
<li>HTML</li>
<li>PHP</li>
<li>MySQL</li>
<li>JavaScript</li>
</ul>

</div>

</div>

<footer>
copyright©internous | 4each blog the which provides A to Z about programming.
</footer>

</body>
</html>