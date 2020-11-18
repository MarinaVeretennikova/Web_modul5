<?
$pass=$_REQUEST['user_pass'];
$nik=$_REQUEST['nik'];

@$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey');
$zapr="SELECT PAROL, NIK FROM TIGROKIPAROLI INNER JOIN TIGROKI ON TIGROKI.KODIGROKA = TIGROKIPAROLI.KODIGROKA where PAROL=".$pass;
@$r=ibase_query($db, $zapr);

if (@$row = ibase_fetch_object($r)>0)
{
     session_start();
     session_register("pass");
     session_register("nik");
  header("Location: folder.php3");
 exit;
    }

 echo '<p><b>Неверный пароль! </b> Попробуйте еще раз <a href="kontrol.php3" target="main"> ввести пароль</a></p> 
<p>Обратитесь к представителям фирмы, если вы <b>забыли пароль </b>    
<a href="mailto:igrokservise@mail.ru"> igrokservise@mail.ru</a>
</p> 
<p>Для занесения своих данных в базу необходима 

<a href="registr.php3" target="main"> регистрация </a> </p>
<p> <a href="../index.php3" target="_top"><b> на главную</b></a></p>';
?>
