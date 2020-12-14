<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Display</title>
</head>
<body>
お名前：
<?php
echo htmlspecialchars($_GET['your_name'], ENT_QUOTES);
?>
</body>
</html>
