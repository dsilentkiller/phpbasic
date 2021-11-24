<html>
    <head>
        <title>Writing php function with parameters.</title>
    </head>

    <body>
<?php
function addFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "Sum of the two 2 minutes is: $sum";
}
addFunction(10, 20);
?>
</body>
</html>
</br>
</br>
</br>
<!-- passing arguments by referece -->

<html>
    <head>
        <title> Pssing argument by reference.</title>
    </head>

    <body>
        <?php
function addFive($num)
{
    $num += 5;
}

function addSix($num)
{
    $num += 6;
}

$orignum = 10;
addFive($orignum);
echo "original value is $orignum</br>";

addSix($orignum);
echo "original value is $orignum</br>";
?>
</body>
</html>

</br>
</br>

<!-- php function returning value -->
<?php


function returnFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}
$return_value = returnFunction(10, 20);

echo "returned value from the function: $return_value";

?>
</br>
<!-- dynamic function call -->

<html >
    <head><title>Dynamic function value</title></head>
    <body>
        <?php
function sayHello()
{
    echo 'hello</br>';

}
$function_holder = "sayHello";
$function_holder();

?>
</body>
    </html>

</br>