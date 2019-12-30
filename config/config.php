<?php
    // データベース設定
    // MySQLを使用すること
    // データベースサーバーのアドレス
    $db_host = 'localhost';
    // データベースユーザー
    $db_user = 'root';
    // データベースユーザーのパスワード
    $db_pass = '';
    // データベース名
    $db_name = 'doujinwebpos';

    // データベースへの接続
    $db_link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // エンコード指定
    mysqli_set_charset($db_link, 'utf8');

    // セッションを開始
    session_start();
?>
