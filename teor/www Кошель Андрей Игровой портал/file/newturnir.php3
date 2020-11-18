<?
$date=date("d.m.Y");

echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">
<h2> Последний турнир от '.$date.'</h2>
<table width=80% border=1> 
<tr> 
<td style="WRITING-MODE:tb-rl"> </td>
<td colspan="4"><b> Группа 1 </td>
<td colspan="4"><b> Группа 2 </td>
<td colspan="4"><b> Группа 3 </td>
<td colspan="4"><b> Группа 4 </td>
<tr><td colspan="0" ><b> Этап 1 </td>';

$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey','Win1251');

$zapr='SELECT TKOMANDI.NAZVANIE, TKOMANDI.KODKOMANDI, TISTORIAKOMANDI.REITING FROM ((TISTORIAKOMANDI INNER JOIN TKOMANDI ON TKOMANDI.istoriaigr=TISTORIAKOMANDI.KODKOMANDI) INNER JOIN TZAIAVKINAU4ASTIE ON TZAIAVKINAU4ASTIE.KODKOMANDI=TKOMANDI.KODKOMANDI) WHERE (((TZAIAVKINAU4ASTIE.ZAIAVKA)=1)) ORDER BY TISTORIAKOMANDI.Reiting desc, TZAIAVKINAU4ASTIE.DATAPODA4I asc';  

$r = ibase_query($db, $zapr);

$j=1;
while ($row = ibase_fetch_object ($r)) 
{
$m1[1][$j]=$row->NAZVANIE;
$m1[2][$j]=$row->REITING; 
$m1[3][$j]=$row->KODKOMANDI;
$j++;
}

$kol=$j-1;

for ($k = 1; $k <=4; $k +=1) 
{
$j=$k;
for ($i = 1; $i <=4; $i +=1) 
{
$grop[$k][$i]=$m1[1][$j];
$reit[$k][$i]=$m1[2][$j];
$j=$j+4;
}
}

for ($i = 1; $i <=4; $i +=1)
{
 $reitob[$i]=0; 
 for ($j = 1; $j <=4; $j +=1)
  {
     echo '<td style="WRITING-MODE:tb-rl">'. $grop[$i][$j] .'</td>';
     $reitob[$i]=$reitob[$i]+$reit[$i][$j];
   }
}

for ($i = 1; $i <=4; $i +=1)
{
 for ($j = 1; $j <=4; $j +=1)
   $verpob[$i][$j]=$reit[$i][$j]/$reitob[$i];
}
echo' <tr><td colspan="0"><b> Этап 2 </td>';

for ($i = 1; $i <=4; $i +=1)
{
$prom[$i][0]=0; 
$prom[$i][1]=$verpob[$i][1]; 
$prom[$i][2]=$prom[$i][1]+$verpob[$i][2]; 
$prom[$i][3]=$prom[$i][2]+$verpob[$i][3]; 
$prom[$i][4]=1;


$slu4=rand(0,100)/100;

 for ($j = 0; $j <=3; $j +=1)
  {
  if (($slu4>$prom[$i][$j]) and ($slu4<=$prom[$i][$j+1]))
   {
     $pob1[$i][1]=$grop[$i][$j+1];
     $pob1[$i][2]=$reit[$i][$j+1];
   }
  }

$pob2[$i]=$pob1[$i];

while ($pob1[$i]==$pob2[$i])
 {
  $slu4=rand(0,100)/100;
     for ($j = 0; $j <=3; $j +=1)
      {
       if (($slu4>$prom[$i][$j]) and ($slu4<$prom[$i][$j+1]))
       {
        $pob1[$i][1]=$grop[$i][$j+1];
        $pob1[$i][2]=$reit[$i][$j+1];
       }
      }
  }
}

$grop2[1][1]=$pob1[1][1]; $reit2[1][1]=$pob1[1][2];
$grop2[1][2]=$pob2[2][1]; $reit2[1][2]=$pob2[2][2];

$grop2[2][1]=$pob2[1][1]; $reit2[2][1]=$pob2[1][2];
$grop2[2][2]=$pob1[2][1]; $reit2[2][2]=$pob1[2][2];

$grop2[3][1]=$pob1[3][1]; $reit2[3][1]=$pob1[3][2]; 
$grop2[3][2]=$pob2[4][1]; $reit2[3][2]=$pob2[4][2]; 

$grop2[4][1]=$pob2[3][1]; $reit2[4][1]=$pob2[3][2];
$grop2[4][2]=$pob1[4][1]; $reit2[4][2]=$pob1[4][2];

for ($i = 1; $i <=4; $i +=1)
{
 $reitob[$i]=0; 
 for ($j = 1; $j <=2; $j +=1)
  {
     echo '<td style="WRITING-MODE:tb-rl" colspan="2">'. $grop2[$i][$j] .'</td>';
   }
}
echo' <tr><td colspan="0" ><b> Этап 3 </td>';


for ($i = 1; $i <=4; $i +=1)
{
 $reitob[$i]=$reit2[$i][1]+$reit2[$i][2];

 $verpob[$i][1]=$reit[$i][1]/$reitob[$i];
 $verpob[$i][2]=$reit[$i][2]/$reitob[$i];

  $slu4=rand(0,100)/100;
     if (($slu4<=$verpob[$i][1]))
       {
        $pob[$i]=$grop2[$i][1];
        $reit4[$i]=$reit[$i][1];
       }
     else
       {
         $reit4[$i]=$reit[$i][2]; 
         $pob[$i]=$grop2[$i][2];   
       }
}


for ($j = 1; $j <=4; $j +=1)
  {
     echo '<td style="WRITING-MODE:tb-rl" colspan="4">'. $pob[$j] .'</td>';
   }


echo'<tr><td colspan="0" ><b> Этап 4 </td>';


$i=1; $j=4;
for ($z = 1; $z <=2; $z +=1)
{
$reitob=$reit4[$i]+$reit4[$j];
$ver[$i]=$reit4[$i]/$reitob;
$ver[$j]=$reit4[$j]/$reitob;
 $slu4=rand(0,100)/100;
     if (($slu4<=$ver[$i]))
       {
        $pob4[$z]=$pob[$i]; 
        $reitpob4[$z]=$reit4[$i];
       }
     else
       {
        $pob4[$z]=$pob[$j];
        $reitpob4[$z]=$reit4[$j]; 
       }
$i=$i+1; $j=$j-1;
}

for ($j = 1; $j <=2; $j +=1)
  {
     echo '<td colspan="8" style="WRITING-MODE:tb-rl" align="center">'. $pob4[$j] .'</td>';
   }

echo'<tr><td colspan="0" ><b> Победитель </td>';

$reitob=$reitpob4[1]+$reitpob4[2];
$ver[1]=$reitpob4[1]/$reitob;
$ver[2]=$reitpob4[2]/$reitob;
 $slu4=rand(0,100)/100;
     if (($slu4<=$ver[1]))
        $pobeditel=$pob4[1]; 
      else
        $pobeditel=$pob4[2];
echo '<td colspan="16" align="center"> <H2>'. $pobeditel .' </H2></td>';    

echo "</table></body>";

$date=date("d.m.Y");

$name="Турнир от ".$date;

$str="INSERT INTO TTURNIR (NAZVANIE, DATA, POBEDITEL) VALUES ('$name', '$date', '$pobeditel')"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr); 

?>