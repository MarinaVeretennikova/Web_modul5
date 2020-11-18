<?
$pass=$_REQUEST['user_pass'];

@$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey');
$zapr="SELECT  KODPREDPR  FROM TMAININFO where KODPREDPR=".$pass;

@$r=ibase_query($db, $zapr);

if (@$row = ibase_fetch_object($r)>0)
{
     session_start();
     session_register("pass");
  header("Location: folder.php3");
 exit;
    }

 echo '<p><b>Неверный пароль! </b> Попробуйте еще раз <a href="pass.php3" target="main"> ввести пароль</a></p> 
<p>Обратитесь к представителям фирмы, если вы <b>забыли пароль </b>    
<a href="mailto:plinor@mail.ru"> plinor@mail.ru</a>
</p> 
<p>Для занесения своих данных в базу необходима 

<a href="registr.php3" target="main"> регистрация </a> </p>
<p> <a href="../index.php3" target="_top"><b> на главную</b></a></p>';
?>
