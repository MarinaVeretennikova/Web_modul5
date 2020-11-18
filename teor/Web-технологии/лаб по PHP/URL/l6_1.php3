<?
printf("<html><body>");
printf("Параметры, которые Вы указали: %s",$_SERVER['QUERY_STRING']);
printf("</body></html>");

// QUERY_STRING - Строка запроса, по которому был выполнен доступ к странице.
// http://localhost/l6_1.php3%20?addind_text_to_URL
?>
