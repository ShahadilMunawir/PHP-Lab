<!-- Program 13 -->

<!DOCTYPE html>
<html>
    <head>
        <title>String Reverse</title>
    </head>
    <body>
        <form method="POST">
            <label for="string">Enter a String: </label>
            <input type="text" id="string" name="string">
            <button type="submit">Reverse String</button>
        </form>
    </body>
    <?php
        if($_POST){
            $string = $_POST["string"];
            echo "</br>String: " . $string . "</br>";
            $len = strlen($string);
            for($i = 0; $i<$len/2; $i++){
                $temp = $string[$i];  
                $string[$i] = $string[$len - 1 -$i];  
                $string[$len - 1 - $i] = $temp;  
            }
            echo "Reverse: " . $string;
        }
    ?>
</html>