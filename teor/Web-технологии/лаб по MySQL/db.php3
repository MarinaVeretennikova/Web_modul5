<?
Error_Reporting(1+2+4);
define("DBName","testbase");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "�� ���� ����������� � ����� ".DBName."!<br>"; exit; }
// ������� ������� test. ���� ����� ������� ��� ����, ��������� �� ������ �����
// ���������, �.�. ������������ "@"
@mysql(DBName,"drop table discipl"); @mysql(DBName,"drop table stud"); @mysql(DBName,"drop table prep"); 
@mysql(DBName,"drop table uplan");@mysql(DBName,"drop table vedom");

/////////////////// ������� ����������� /////////////////////
@mysql(DBName,"create table discipl(numdis int not null, namedis text not null, primary key (numdis), unique(numdis))");

mysql(DBName,"insert into discipl(numdis,namedis) values(1,'������')");
mysql(DBName,"insert into discipl(numdis,namedis) values(2,'�����������')");
mysql(DBName,"insert into discipl(numdis,namedis) values(3,'�������')");
mysql(DBName,"insert into discipl(numdis,namedis) values(4,'���������')");

// ������� ��� ������
echo '<B><br>������� ����������:</B> <br>';
$r=mysql(DBName,"select * from discipl");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
echo "$f[numdis] -> $f[namedis]<br>\n";
}


/////////////////// ������� �������� /////////////////////
mysql(DBName,"create index numstud on stud(numstud)");
@mysql(DBName,"create table stud(numstud int not null  auto_increment, FIOstud text not null, groop text, adress text, telefon text, primary key (numstud), unique(numstud))");


mysql(DBName,"insert into stud(FIOstud, groop,adress, telefon) values('������� �.�.', '��-32', '������� 25, 4', '25-65-89' )");
mysql(DBName,"insert into stud(FIOstud, groop,adress, telefon) values('��������� �.�.', '��-12', '��������� 125', '25-55-91' )");
mysql(DBName,"insert into stud(FIOstud, groop,adress, telefon) values('�������� �.�.', '��-32', '������� 45, 54', '25-27-11' )");

// ������� ��� ������
echo '<B><br>������� ��������: </B><br>';
$r=mysql(DBName,"select * from stud");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
echo "$f[numstud] -> $f[FIOstud] -> $f[groop]-> $f[adress]-> $f[telefon] <br>\n";
}
/////////////////// ������� �������������� /////////////////////
@mysql(DBName,"create table prep(numprep int not null, FIOprep text, doljnost text, kafedra text, telefon text, primary key (numprep), unique(numprep))");

mysql(DBName,"insert into prep(numprep, FIOprep, doljnost,kafedra, telefon) values(1,'������� �.�.', '�� ��', '������', '35-15-89' )");
mysql(DBName,"insert into prep(numprep, FIOprep, doljnost,kafedra, telefon) values(2,'��������� �.�.', '��� ���', '���������', '55-85-89' )");
mysql(DBName,"insert into prep(numprep, FIOprep, doljnost,kafedra, telefon) values(3,'������ �.�.', '�� ��', '��', '55-85-89' )");

echo '<B><br>������� �������������:</B> <br>';
$r=mysql(DBName,"select * from prep");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
echo "$f[numprep] -> $f[FIOprep]  -> $f[doljnost] -> $f[kafedra]-> -> $f[telefon]   <br>\n";
}

/////////////////// ������� ������������/////////////////////
@mysql(DBName,"create table uplan(numplan int not null, numdis int not null, semestr int, kolch int, numprep int, primary key (numplan), unique(numplan))");

mysql(DBName,"insert into uplan(numplan, numdis, semestr, kolch,numprep) values(1, 4, 4, 47, 2 )");
mysql(DBName,"insert into uplan(numplan, numdis, semestr, kolch,numprep) values(2, 2, 1, 17, 3 )");
mysql(DBName,"insert into uplan(numplan, numdis, semestr, kolch,numprep) values(3, 3, 1, 42, 3 )");
mysql(DBName,"insert into uplan(numplan, numdis, semestr, kolch,numprep) values(4, 1, 3, 25, 1 )");

echo '<B><br>������� ������� ����:</B> <br>';
$r=mysql(DBName,"select * from uplan");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
echo "$f[numplan] -> $f[numdis]  -> $f[semestr] -> $f[kolch] -> $f[numprep]   <br>\n";
}

/////////////////// ������� ����������/////////////////////
@mysql(DBName,"create table vedom(numstud int not null, numplan int not null, bal int not null, dat date, primary key (numstud, numplan), check(bal<=6))");

mysql(DBName,"insert into vedom(numstud, numplan, bal, dat) values(1, 4, 4, '2005-12-20')");
mysql(DBName,"insert into vedom(numstud, numplan, bal, dat) values(2, 2, 3, '2004-05-05')");
mysql(DBName,"insert into vedom(numstud, numplan, bal, dat) values(3, 1, 5, '2006-01-25')");
mysql(DBName,"insert into vedom(numstud, numplan, bal, dat) values(4, 4, 2, '2005-12-25')");

echo '<B><br>������� ���������:</B> <br>';
$r=mysql(DBName,"select * from vedom");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
echo "$f[numstud] -> $f[numplan]  -> $f[bal] -> $f[dat]   <br>\n";
}

mySQL(DBName, "alter table prep add foreign key (numprep) references uplan (numprep) on update cascade on delete no action");
mySQL(DBName, "alter table discip add foreign key (numdis) references uplan (numdis) on update cascade on delete no action");
mySQL(DBName, "alter table stud add foreign key (numstud) references vedom (numstud) on update cascade on delete no action");
mySQL(DBName, "alter table uplan add foreign key (numplan) references vedom (numplan) on update cascade on delete no action");
  
?>