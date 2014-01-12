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
                    echo "<center><img src=img\plus.png onclick=increment_box1(document.getElementById('box1'));></center>";
                echo "</td>";
                echo "<td>";    
                    echo "<center><img src=img\plus.png onclick=increment_box2(document.getElementById('box2'));></center>";
                echo "</td>";
                echo "<td>";    
                    echo "<center><img src=img\plus.png onclick=increment_box3(document.getElementById('box3'));></center>";
                echo "</td>";
                echo "<td>";    
                    echo "<center><img src=img\plus.png onclick=increment_box4(document.getElementById('box4'));></center>";
                echo "</td>";
                echo "<td>";    
                    echo "<center><img src=img\plus.png onclick=increment_box5(document.getElementById('box5'));></center>";
                echo "</td>";
            echo "</tr>";     
            echo "<tr>";
                echo "<td>";
                    echo "<input type='text' value='1' id='box1'/>";
                echo "</td>";
                echo "<td>";
                    echo "<input type='text' value='1' id='box2'/>";
                echo "</td>";
                echo "<td>";
                    echo "<input type='text' value='1' id='box3'/>";
                echo "</td>";
                echo "<td>";
                    echo "<input type='text' value='1' id='box4'/>";
                echo "</td>";
                echo "<td>";
                    echo "<input type='text' value='1' id='box5'/>";
                echo "</td>";
            echo "</tr>"; 
            echo "<tr>";
                echo "<td>";    
                    echo "<center><img src=img\minus.png onclick=decrement_box1(document.getElementById('box1'));></center>";
                echo "</td>";
                echo "<td>";    
                    echo "<center><img src=img\minus.png onclick=decrement_box2(document.getElementById('box2'));></center>";
                echo "</td>";
                echo "<td>";    
                    echo "<center><img src=img\minus.png onclick=decrement_box3(document.getElementById('box3'));></center>";
                echo "</td>";
                echo "<td>";    
                   echo "<center><img src=img\minus.png onclick=decrement_box4(document.getElementById('box4'));></center>";
                echo "</td>";
                echo "<td>";    
                   echo "<center><img src=img\minus.png onclick=decrement_box5(document.getElementById('box5'));></center>";
                echo "</td>";
            echo "</tr>";  
        echo "</table>";  
        echo "<center><input type=submit value='make bet!'></center>";
        echo "<center><input id=b3 type=button value='try your luck!'/></center>";
        echo "</form>"; 
         ?>
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
        <script type="text/javascript">
            function rand(){
                var mn = 1;
                var mx = 20;
                var ran = mn + Math.floor(Math.random()*(mx+1-mn));
                return ran;
            }
            $("#b3").click(function(){
                $("#box1").val(rand());
                $("#box2").val(rand());
                $("#box3").val(rand());
                $("#box4").val(rand());
                $("#box5").val(rand());
                $("#box5").val(rand());
                return false;
            });
        </script>
    </body>
</html>
