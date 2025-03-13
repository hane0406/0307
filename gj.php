<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>報名成功</title>
</head>
<body style="background-color:#F2D6EF; color:#2C0728;">
    <h1>🎉 報名成功！</h1>
    <p>以下是您的報名資訊：</p>
    <hr>
    <?php
        echo "<b>場次：</b>" . (isset($_POST["place"]) ? htmlspecialchars($_POST["place"]) : "未填寫") . "<br>";
        echo "<b>姓名：</b>" . (isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "未填寫") . "<br>";
        echo "<b>E-Mail：</b>" . (isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "未填寫") . "<br>";
        echo "<b>連絡電話：</b>" . (isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "未填寫") . "<br>";
        echo "<b>備註：</b><pre>" . (isset($_POST["note"]) ? nl2br(htmlspecialchars($_POST["note"])) : "未填寫") . "</pre>";
    ?>
    <hr>
    <p>我們期待與您相見，感謝您的報名！</p>
    <img src="people.jpeg" width="300">
</body>
</html>
