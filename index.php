<?php
	//connect to db
	$con = mysql_connect('localhost','root', '');
	$db  = mysql_select_db('loto_db');

	//if insert key is pressed then do insertion
	if($_POST['action'] == 'insert'){

		$num_first  = mysql_real_escape_string($_POST['num_first']);
		$num_second = mysql_real_escape_string($_POST['num_second']);

		$sql   = "insert into loto_ticket_info (num_first, num_second, num_third, num_fourth, num_fifth, num_sixth) values (11, 21, 31, 41, 51, 61)";
		$query = mysql_query($sql);
		if($query){
			echo "Record Inserted.";
		}else {
			echo "Something Wrong!";
		}
	}
	//if show key is pressed then show records
	if($_POST['action'] == 'show'){
		$sql   = "select * from mytable order by id desc limit 10";
		$query = mysql_query($sql);

		echo "<table border='1'>";
		while($row = mysql_fetch_assoc($query)){
			echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[email]</td></tr>";
		}
		echo "</table>";
	}
?>