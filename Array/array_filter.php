<?php
// array_filter()-used to filter an array
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

//Original array
echo "Original array: <br/>";
foreach ($array as $key) {
    echo "$key ";
}
echo "<br/>";

//Filter function
function even_number($val)
{
    return ($val % 2 == 0);
}

echo "Even number: <br/>";
//Filtering an array
$even = array_filter($array, "even_number");
foreach ($even as $key) {
    echo "$key ";
}
echo "<br/>";

//Filter funtion
function odd_number($val)
{
    return ($val % 2 == 1);
}
echo "Odd number: <br/>";
//Filtering an array
$odd = array_filter($array, "odd_number");
foreach ($odd as $key) {
    echo "$key ";
}
echo "<br/>";


?>
