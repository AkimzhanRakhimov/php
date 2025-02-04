<?php

echo "Введите первое число: ";
$firstNumber = fgets(STDIN);


echo "Введите второе число: ";
$secondNumber = fgets(STDIN);


$firstNumber = (float)trim($firstNumber);
$secondNumber = (float)trim($secondNumber);


$result = $firstNumber * $secondNumber;


if ($firstNumber < $result) {
    echo "Первое число меньше результата умножения.\n";
} else {
    echo "Первое число не меньше результата умножения.\n";
}
?>
