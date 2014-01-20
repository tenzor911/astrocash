<?php									//начало php
$link = mysql_connect( "localhost", "root", ""); 			//создание ссылки на подключение к БД, адрес(ваш компьютер), имя пользователя, пароль
mysql_query("SET NAMES 'UTF-8'");					//общение с сервером будет проходить в кодировке UTF-8
$result = mysql_query("SELECT num_first, num_second, num_third, num_fourth, num_fifth, num_sixth FROM loto_db.loto_ticket_info");		//SQL-запрос к серверу, "дословно: выбери столбцы info1 и info2 из таблицы table1, которая находится в базе данных news", запись результата запроса в переменную-таблицу $result
if(!$result) exit("Error in $sql: ".mysql_error()); 			//стандартный вывод диагностики mysql,благодаря ему можно увидеть где ошибка в sql запросе, данная строка не обязательна и идет как пример,попробуйте намеренно сделать ошибку в sql-запросе, например измените info2 на info3 и увидите что она делает
$num_rows = mysql_num_rows($result);					//подсчет количества строк в таблице $result и запись результата в переменную $num_rows
$num1=$_POST["num1"];							//присвоение переменной $info1 значения "info1", взятого из html-странички методом POST 
$num2=$_POST["num2"];		
$num3=$_POST["num3"];	
$num4=$_POST["num4"];	
$num5=$_POST["num5"];	
$num6=$_POST["num6"];	
$current_date = date("H:i:s d-m-Y");
$insert = mysql_query("INSERT INTO loto_db.loto_ticket_info (num_first, num_second, num_third, num_fourth, num_fifth, num_sixth, bid_date) VALUES('$num1','$num2','$num3','$num4','$num5','$num6', '$current_date')"); //вставка значений $info1 и $info2 в таблицу БД, спомощью SQL-запроса, id берется на 1 больше, чем количество строк в таблице.
?>									