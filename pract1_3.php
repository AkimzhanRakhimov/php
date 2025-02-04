<?php

echo "Введите первое число: ";
$firstNumber = fgets(STDIN);


echo "Введите второе число: ";
$secondNumber = fgets(STDIN);


$firstNumber = (float)trim($firstNumber);
$secondNumber = (float)trim($secondNumber);


$sum = $firstNumber + $secondNumber;
$difference = $firstNumber - $secondNumber;
$multiplication = $firstNumber * $secondNumber;


echo "Сумма чисел: $sum\n";
echo "Разница чисел: $difference\n";
echo "Произведение чисел: $multiplication\n";


if (abs($difference) > abs($multiplication)) {
    echo "Разница между числами больше их произведения.\n";
} else {
    echo "Разница между числами не больше их произведения.\n";
}
?>
