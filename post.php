<html>
<body>
<form mrthod ="post" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type ="text" name ="fname">
<input type ="submit">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "please enter your name";
    }
    else {
        echo $name;
    }
}


?>


</body>
</html>