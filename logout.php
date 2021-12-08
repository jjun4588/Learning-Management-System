<?
session_start();

$reset = session_destroy();

if($reset){
  echo "<center>로그아웃 성공(세션파괴)<br><br><a href=login.html>로그인 화면으로</a></center>";
}