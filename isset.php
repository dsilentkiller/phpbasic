<!-- isset  is used to check whether a variable is empty or not.-->

<?php


$x = 0;
//true because $x is set

if (isset($x)) {
    echo "Variable 'x' is set";
}

?>
</br>

<?php
$var = 0;

//evalute true value 
if (empty($var)) {
    echo "$var is either 0, empty , or not set at all";
}
if (isset($var)) {
    echo "$var is set even though it is empty";
}
?>
</br >

<!-- floatval,floatval -->
<?php

$var = '112.76543';
$float_value_of_var = floatval($var);
echo $float_value_of_var;

?>
</br>


<!-- get_defined_vars

It returns all defined variables, as an array: -->

<?php

$b = array(1, 1, 2, 3, 4, 5, 8);
$arr = get_defined_vars();
print_r($arr["b"]);
?>

<!-- gettype : return the type of different variables.-->

</br>

</br>
</br>
<?php

$a = 3;
echo gettype($a);

?>

</br>

<?php

echo intval(42); ?>
</br>
<!-- is_array: to check whether a variable is an array or not -->
<?php

$a = "hello";
echo "a is " . is_array($a);
?>
</br>

<!-- array : anarray stores multiple values in one single variable -->
<!-- declaring an array -->
<?php
$cms = array("harry", "lovish", "rohan");
echo "who need choclate? is it " . $cms[0] . "," .
    $cms[1] . "or" . $cms[2] . "?";



?>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
