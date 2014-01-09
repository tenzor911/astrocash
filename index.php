<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://malsup.github.io/jquery.cycle.all.js"></script>
        <title></title>
    </head>
    <body>
       <?php
        echo "<form  action=handler.php method=post>";	
        echo "<table border=1 align=center>";
            echo "<tr>";
                echo "<td>";
                    echo "<input type=text size=2 maxlength=2 name=user1>";
                echo "</td>";
                echo "<td>";
                    echo "<input type=text size=2 maxlength=2 name=user2>";
                echo "</td>";
                echo "<td>";
                    echo "<input type=text size=2 maxlength=2 name=user3>";
                echo "</td>";
                echo "<td>";
                    echo "<input type=text size=2 maxlength=2 name=user4>";
                echo "</td>";
                echo "<td>";
                    echo "<input type=text size=2 maxlength=2 name=user5>";
                echo "</td>";
            echo "</tr>"; 
        echo "</table>";  
        echo "<center><input type=submit value='make bet!'></center>";
        echo "</form>";
         ?>
        <div>
            <img src='img\plus.png' onclick="increment_box1(document.getElementById('box1'));"/>
            <input type='text' value='1' id='box1'/>
            <img src='img\minus.png' onclick="decrement_box1(document.getElementById('box1'));"/>
        </div>
        <div>
            <img src='img\plus.png' onclick="increment_box2(document.getElementById('box2'));"/>
            <input type='text' value='1' id='box2'/>
            <img src='img\minus.png' onclick="decrement_box2(document.getElementById('box2'));"/>
        </div>
        <div>
            <img src='img\plus.png' onclick="increment_box3(document.getElementById('box3'));"/>
            <input type='text' value='1' id='box3'/>
            <img src='img\minus.png' onclick="decrement_box3(document.getElementById('box3'));"/>
        </div>
        <div>
            <img src='img\plus.png' onclick="increment_box4(document.getElementById('box4'));"/>
            <input type='text' value='1' id='box4'/>
            <img src='img\minus.png' onclick="decrement_box4(document.getElementById('box4'));"/>
        </div>
        <div>
            <img src='img\plus.png' onclick="increment_box5(document.getElementById('box5'));"/>
            <input type='text' value='1' id='box5'/>
            <img src='img\minus.png' onclick="decrement_box5(document.getElementById('box5'));"/>
        </div>
        <div>
            <img src='img\plus.png' onclick="increment_box6(document.getElementById('box6'));"/>
            <input type='text' value='1' id='box6'/>
            <img src='img\minus.png' onclick="decrement_box6(document.getElementById('box6'));"/>
        </div>
        <script>
            function increment_box1(myInput) {
                if (myInput.value <= 19) {
                    myInput.value = (+myInput.value + 1) || 0;
                }
            }
            function decrement_box1(myInput) {
                myInput.value = Math.max(1, (myInput.value - 1) || 0);
            }
        </script>
        <script>
            function increment_box2(myInput) {
                if (myInput.value <= 19) {
                    myInput.value = (+myInput.value + 1) || 0;
                }
            }
            function decrement_box2(myInput) {
                myInput.value = Math.max(1, (myInput.value - 1) || 0);
            }
        </script>
        <script>
            function increment_box3(myInput) {
                if (myInput.value <= 19) {
                    myInput.value = (+myInput.value + 1) || 0;
                }
            }
            function decrement_box3(myInput) {
                myInput.value = Math.max(1, (myInput.value - 1) || 0);
            }
        </script>
        <script>
            function increment_box4(myInput) {
                if (myInput.value <= 19) {
                    myInput.value = (+myInput.value + 1) || 0;
                }
            }
            function decrement_box4(myInput) {
                myInput.value = Math.max(1, (myInput.value - 1) || 0);
            }
        </script>
        <script>
            function increment_box5(myInput) {
                if (myInput.value <= 19) {
                    myInput.value = (+myInput.value + 1) || 0;
                }
            }
            function decrement_box5(myInput) {
                myInput.value = Math.max(1, (myInput.value - 1) || 0);
            }
        </script>
        <script>
            function increment_box6(myInput) {
                if (myInput.value <= 19) {
                    myInput.value = (+myInput.value + 1) || 0;
                }
            }
            function decrement_box6(myInput) {
                myInput.value = Math.max(1, (myInput.value - 1) || 0);
            }
        </script>
    </body>
</html>
