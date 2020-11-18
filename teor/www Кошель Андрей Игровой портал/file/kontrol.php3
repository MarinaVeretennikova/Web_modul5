<?
echo'
<LINK href="style.css" 
type=text/css rel=stylesheet>
<body bgcolor="#e7e7e7">
<p>
Для получения доступа к вашей личной папке введите ник и пароль:  </p>
<form action="authorize.php3" method="post">
Ник: <br>
<input type="" name="nik"> <br>
Пароль: <br>
<input type="password" name="user_pass">
<input type="submit" name="submit" value="Вход >>">
</form>
<p>Обратитесь к представителям фирмы, если вы <b>забыли пароль </b>    
<a href="mailto:iqrokservise@mail.ru"> iqrokservise@mail.ru</a>
</p> 
<p>Для занесения своих данных в базу необходима 

<a href="registr.php3" target="main"> регистрация </a> </p>
<p> <a href="../index.php3" target="_top"><b> на главную</b></a></p>
</body >';
?>