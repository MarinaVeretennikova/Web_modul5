<?
echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#FFEFD5">';

$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey','Win1251');


$zapr="SELECT  KODPREDPR  FROM TMAININFO where KODPREDPR=".$_REQUEST['pass'];
@$r=ibase_query($db, $zapr);
if (@$row = ibase_fetch_object($r)>0)
{

$ZARPL=$_REQUEST['p2'];
$REGRAB=$_REQUEST['p6'];
$USLTRRUDA=$_REQUEST['p3'];
$KARROST=$_REQUEST['p7'];
$UDALENNOST=$_REQUEST['p5'];
$PREDOSTGILJA=$_REQUEST['p8'];
$SOCPAKET=$_REQUEST['p9'];
$NAUCHRABOTA=$_REQUEST['p10'];
$KOMANDIROVKI=$_REQUEST['p11'];


$str="INSERT INTO TVAKANSII (ZARPL, REGRAB, USLTRRUDA, KARROST,
  UDALENNOST, PREDOSTGILJA, SOCPAKET, NAUCHRABOTA, KOMANDIROVKI) VALUES ('$ZARPL','$REGRAB','$USLTRRUDA','$KARROST','$UDALENNOST','$PREDOSTGILJA', '$SOCPAKET','$NAUCHRABOTA', '$KOMANDIROVKI')"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr); 

if ($i==0) {echo '<font color="red"> ��������, �� ������ �� ���������. ���������� ��� ��� </font>';}
else {echo '<p> <b> ������ ������� ��������� </p> </b>';
}

echo' <table width=40%> <tr > <td align="right"><a href="dobvak.php3"> �������� ��������  </a> </td> </tr> <tr > <td align="right"><a href="glavn.php3"><B> �� ������� </b> </a> </td> </tr></table>';}
else
{ echo '<p><b>�������� ������! </b> ���������� ��� ��� <a href="dobvak.php3" target="main"> ������ ��������</a></p> 
<p>���������� � �������������� �����, ���� �� <b>������ ������ </b>    
<a href="mailto:plinor@mail.ru"> plinor@mail.ru</a>
</p> 
<p>��� ��������� ����� ������ � ���� ���������� 

<a href="registr.php3" target="main"> ����������� </a> </p>
<p> <a href="../index.php3" target="_top"><b> �� �������</b></a></p>';
}

?>