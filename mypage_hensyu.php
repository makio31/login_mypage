<?php
mb_internal_encoding("utf8");
session_start();

if (empty($_POST['from_mypage'])) {
  header("Location:login_error.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>マイページ登録</title>
<link rel="stylesheet" href="mypage.css">
</head>
 
<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <div class="logout"><a href="log_out.php">ログアウト</a></div>
  </header>

  <main>
    
    <div class="box">
      <div class="boxin">
        <h2>会員情報</h2>
        <div class="hello">
          <?= "こんにちは！　" . $_SESSION['name'] . "さん" ?>
        </div>
        <form action="mypage_update.php" method="post">
          <div class="profile_pic">
            <img src="<?= $_SESSION['picture'] ?>">
          </div>
          <div class="basic_info">
            <p>氏名:
              <input type="text" size="30" value="<?= $_SESSION['name'] ?>" name="name">
            </p>
            <p>メール:
              <input type="text" size="30" value="<?= $_SESSION['mail'] ?>" name="mail">
            </p>
            <p>パスワード:
              <input type="text" size="30" value="<?= $_SESSION['password'] ?>" name="password">
            </p>
          </div>
          <div class="comments">
            <textarea cols="88" rows="3" name="comments"><?= $_SESSION['comments'] ?></textarea>
          </div>
          <div class="button_centerq">
            <input type="submit" class="submit_buttonq" size="35" value="この内容に変更する">
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer>
    ©️ 2018 InterNouse.inc. All rights reserved
  </footer>

</body>

</html>