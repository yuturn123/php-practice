<?php
$news = file_get_contents('data/news.txt');
echo $news;
//ファイルの追記
//＄news = $news."<br>追加のニュースです";//なぜかエラー
$success = file_put_contents('data/news.txt', $news ."<br>追加のニュースです");
//readfile('data/news.txt');
?>
