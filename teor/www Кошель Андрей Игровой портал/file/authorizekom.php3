<?
$pass=$_REQUEST['user_pass'];
$nik=$_REQUEST['nik'];


$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey');

$zapr="SELECT PAROL, NIK, KOMANDA FROM TIGROKIPAROLI INNER JOIN TIGROKI ON TIGROKI.KODIGROKA = TIGROKIPAROLI.KODIGROKA WHERE PAROL='".$pass."'";


$r=ibase_query($db, $zapr);

$row = ibase_fetch_object($r);


$nik=$row->NIK;
$kom=$row->KOMANDA;

if ($row>0)
{

$zap="SELECT NAZVANIE FROM TKOMANDI where KAPITAN='$nik'";
 
$rr=ibase_query($db, $zap);

$roww = ibase_fetch_object($rr);

   if (($roww>0) and ($roww->NAZVANIE=$kom))
    {

      session_start();
      session_register("pass");
      session_register("nik");
      session_register("kom");
      header("Location: folderkom.php3");
      exit;
  }
} echo '<p><b>�������� ������! </b> ���������� ��� ��� <a href="kontrolkom.php3" target="main"> ������ ������</a></p> 
<p>���������� � �������������� �����, ���� �� <b>������ ������ </b>    
<a href="mailto:igrokservise@mail.ru"> igrokservise@mail.ru</a>
</p> 
<p>��� ��������� ����� ������ � ���� ���������� 

<a href="registr.php3" target="main"> ����������� </a> </p>
<p> <a href="../index.php3" target="_top"><b> �� �������</b></a></p>';
?>
