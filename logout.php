<?
session_start();

$reset = session_destroy();

if($reset){
  echo "<center>�α׾ƿ� ����(�����ı�)<br><br><a href=login.html>�α��� ȭ������</a></center>";
}