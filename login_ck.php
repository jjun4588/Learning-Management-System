<?
session_start();
if(!isset($_SESSION['user_id'])){
  $id = $_POST['id'];
  $pw = $_POST['pw'];
}
if (isset($_SESSION['user_job'])) {
   $job = $_SESSION['user_job'];
}
$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� ����!");
mysql_select_db("BachelorManagement", $connect);
$check = "SELECT * FROM user where id='$id'";
$result = mysql_query($check, $connect);
$sdtinfo = mysql_fetch_array($result);
$_SESSION['user_id']=$sdtinfo[0];
$_SESSION['user_pw']=$sdtinfo[1];
$_SESSION['user_name']=$sdtinfo[2];
$_SESSION['user_department']=$sdtinfo[3];
$_SESSION['user_email']=$sdtinfo[4];
$_SESSION['user_phone']=$sdtinfo[5];
      if($sdtinfo[2]==NULL&&$sdtinfo[3]==NULL&&$sdtinfo[4]==NULL&&$sdtinfo[5]==NULL){
        echo "<center>ȸ�������� �������� �ʽ��ϴ�.<br>";
        echo "<a href=signup.html>ȸ������ ȭ������</a><br>";
        echo "<a href=login.html>�α��� ȭ������</a></center>";
        session_destroy(); 
      }
      else{
		if($sdtinfo[1]!=$pw && $sdtinfo[0]!=$id){
 			 echo "<center>���̵�� ��й�ȣ�� �Է��ϼ���.<br>";
 			 echo "<a href=signup.html>ȸ������ ȭ������</a><br>";
  			echo "<a href=login.html>�α��� ȭ������</a></center>";
   		}
		else if($sdtinfo[1]!=$pw){
       		echo "<center>��й�ȣ�� �Է����� �ʾҰų� Ʋ�Ƚ��ϴ�.<br>";
      		echo "<a href=signup.html>ȸ������ ȭ������</a><br>";
       		echo "<a href=login.html>�α��� ȭ������</a></center>";
		}
		else{
 			if ($sdtinfo[7] == "�л�") {
 				 echo "<center>�α��ο� �����Ͽ����ϴ�.<br><br><br>";
				 echo "<a href=s_index.html>(�л�) �л���� �ý��� ����</a></center>"; 
			}
			else if ($sdtinfo[7] == "����") {
  				echo "<center>�α��ο� �����Ͽ����ϴ�.<br><br><br>";
				echo "<a href=p_index.html>(����) �л���� �ý��� ����</a></center>"; 
			}
  			else if ($sdtinfo[7] == "����") {
  				echo "<center>�α��ο� �����Ͽ����ϴ�.<br><br><br>";
  				echo "<a href=t_index.html>(����) �л���� �ý��� ����</a></center>";
			}
			else if ($sdtinfo[7] == "����") {
				echo "<center>�α��ο� �����Ͽ����ϴ�.<br><br><br>";
				echo "<a href=a_index.html>(����) �л���� �ý��� ����</a></center>";
			}
    	 }
     }
?>