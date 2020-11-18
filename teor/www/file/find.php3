<?
echo'
<Html>
<head>  <LINK href="style.css" 
type=text/css rel=stylesheet><title></title></head>
<body bgcolor="#FFEFD5">
<form  method="post">';
$i=1;
for ($i = 1; $i <=10; $i +=1)
{
$st='tr'.$i;
$tr[$i]=$_REQUEST[$st]; 
}
for ($i = 1; $i <=10; $i +=1)
{
$st='zn'.$i;
$znach[$i]=$_REQUEST[$st]; 
$znach[$i]=2*(10-$znach[$i]+1)/110;
}


$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey');
$zapr="SELECT  ZARPL, REGRAB, USLTRRUDA,  KARROST, UDALENNOST,
  PREDOSTGILJA, SOCPAKET, NAUCHRABOTA, KOMANDIROVKI,  EOSVS FROM  TVAKANSII INNER JOIN TEOSVAKANSII ON TVAKANSII.KODVAKANSII = TEOSVAKANSII.KODVAKANSII WHERE TEOSVAKANSII.KODSPEC=".$_REQUEST['spec']; 
$r = ibase_query($db, $zapr);
$j=1;
while ($row = ibase_fetch_object ($r)) 
{
$m1[1][$j]=$row->ZARPL;
$m1[2][$j]=$row->USLTRRUDA;
$m1[3][$j]=$row->EOSVS;
$m1[4][$j]=$row->UDALENNOST;
$m1[5][$j]=$row->REGRAB;
$m1[6][$j]=$row->KARROST;
$m1[7][$j]=$row->PREDOSTGILJA;
$m1[8][$j]=$row->SOCPAKET;
$m1[9][$j]=$row->NAUCHRABOTA;
$m1[10][$j]=$row->KOMANDIROVKI;
$j+=1;
}
$kv=$j-1;
for ($i = 1; $i <=$kv; $i +=1)
{
if ($m1[1][$i]>=$tr[1]) {$m2[1][$i]=1;} else {$m2[1][$i]=$m1[1][$i]/$tr[1];}
if ($m1[2][$i]<=$tr[2]) {$m2[2][$i]=1;} else {$m2[2][$i]=$tr[2]/$m1[2][$i];}
if ($m1[3][$i]>=$tr[3]) {$m2[3][$i]=1;} else {$m2[3][$i]=$m1[3][$i]/$tr[3];}

	for ($j = 4; $j <=10; $j +=1)
	if ($m1[$j][$i]==$tr[$j]) {$m2[$j][$i]=1;} else {$m2[$j][$i]=0;}

}


for ($i = 1; $i <=$kv; $i +=1)
{$result[$i]=0;
  for ($j = 1; $j <=10; $j +=1)
     {$result[$i]=$result[$i]+$m2[$j][$i]*$znach[$j];}
}

echo '
<B><U>Сведения о найденных по вашим требованиям вакансиях </U></B>
<p>
<table> <tr><td><b>Степень соответствия</td>
<td><b>Вакансия</td>
<td><b>Предприятие</td>
<td><b>Город</td>
<td><b>Адрес</td>
<td><b>Номер телефона</td>
<td><b>e-mail</td> <tr><td>';

$is=2;
for ($i = 1; $i <=$kv; $i +=1)
{$result[$i]=$result[$i]*100;
if ($result[$i]>30) 
{
$is=0;
echo round($result[$i]).'% </td>';


$zapr="SELECT NAME FROM TNAMEVAKAN WHERE KODVAKANSII=".$i;
$r = ibase_query($db, $zapr);

$row = ibase_fetch_object ($r);
echo '<td>'. $row->NAME .'</td>';

$zapr="SELECT  NAZVANIE, GOROD, ADRESS, TELEPHON, E_MAIL FROM  TMAININFO where KODPREDPR= (select KODPREDPR from TSVIAZVAKPREDPR where KODVAKANSII=".$i.")"; 


$r = ibase_query($db, $zapr);

$row = ibase_fetch_object ($r);
echo '<td>'. $row->NAZVANIE .'</td>';
echo '<td>'. $row->GOROD.'</td>';
echo '<td>'. $row->ADRESS.'</td>';
echo '<td>'. $row->TELEPHON.'</td>';
echo '<td>'. $row->E_MAIL.'</td></tr><tr><td>';

}};

echo '</td></tr></table></p>';

if ($is!=0) {echo '<p><b><font color="red">Нет вакансий соответствующих вашим требованиям</font></b></p>';}
echo' <table width=40%> <tr > <td align="right">   <a href="findjob.php3"> Новый поиск </a> </td> </tr> <tr > <td align="right"><a href="index.php3" target="_blank"><B> на главную </b> </a> </td> </tr></table>';
echo'</form> </body> </html>';

?>