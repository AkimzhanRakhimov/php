<?php

echo "Введите первое число: ";
$firstNumber = fgets(STDIN);


echo "Введите второе число: ";
$secondNumber = fgets(STDIN);


$firstNumber = (float)trim($firstNumber);
$secondNumber = (float)trim($secondNumber);


$multiplication = $firstNumber * $secondNumber;
$subtraction = $firstNumber - $secondNumber;


echo "Произведение чисел: $multiplication\n";
echo "Разница чисел: $subtraction\n";


if ($multiplication > $subtraction) {
    echo "Произведение чисел больше разницы чисел.\n";
} else {
    echo "Произведение чисел не больше разницы чисел.\n";
}
?>
