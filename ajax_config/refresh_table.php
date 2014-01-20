<?php									//начало php-кода
$link = mysql_connect( "localhost", "root", ""); 			//создание ссылки на подключение к БД, адрес(ваш компьютер), имя пользователя, пароль
mysql_query("SET NAMES 'UTF-8'");					//общение с сервером будет проходить в кодировке UTF-8
$result = mysql_query("SELECT num_first, num_second, num_third, num_fourth, num_fifth, num_sixth, bid_date FROM loto_db.loto_ticket_info");		//SQL-запрос к серверу, "дословно: выбери столбцы info1 и info2 из таблицы table1, которая находится в базе данных news", запись результата запроса в переменную-таблицу $result
if(!$result) exit("Error in $sql: ".mysql_error()); 			//стандартный вывод диагностики mysql,благодаря ему можно увидеть где ошибка в sql запросе, данная строка не обязательна и идет как пример,попробуйте намеренно сделать ошибку в sql-запросе, например измените info2 на info3 и увидите что она делает
$num_rows = mysql_num_rows($result);					//подсчет количества строк в таблице $result и запись результата в переменную $num_rows
echo ("<br>");

echo "Количество ваших ставок: $num_rows";//вывод количества строк
echo "<br>";
echo "<table style='border-collapse:collapse'>";			//определение стиля границ html-таблицы
echo "<br>";								//начало новой строки
for ($c=0; $c<$num_rows; $c++)						//цикл, в котором выводится построчно информация из таблицы $result, в виде html-таблицы
    {
        $f = mysql_fetch_array($result);
        echo "<tr>";
        echo "<td style='border:1px solid grey' width='60'>$f[num_first]</td>";
        echo "<td style='border:1px solid grey' width='60'>$f[num_second]</td>";
        echo "<td style='border:1px solid grey' width='60'>$f[num_third]</td>";
        echo "<td style='border:1px solid grey' width='60'>$f[num_fourth]</td>";
        echo "<td style='border:1px solid grey' width='60'>$f[num_fifth]</td>";
        echo "<td style='border:1px solid grey' width='60'>$f[num_sixth]</td>";
        echo "<td style='border:1px solid grey' width='180'>$f[bid_date]</td>";
        echo "</tr>";
    }									
echo "</table>";							

?>									