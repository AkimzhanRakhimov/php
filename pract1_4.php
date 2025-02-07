<?php


echo "Введите первое число: ";
$firstNumber = fgets(STDIN);

echo "Введите второе число: ";
$secondNumber = fgets(STDIN);

echo "Введите третье число: ";
$thirdNumber = fgets(STDIN);


$firstNumber = (float)trim($firstNumber);
$secondNumber = (float)trim($secondNumber);
$thirdNumber = (float)trim($thirdNumber);


$sum = $firstNumber + $secondNumber + $thirdNumber;
$differenceAndMultiplication = ($firstNumber - $secondNumber) * $thirdNumber;
$division = ($secondNumber != $thirdNumber) ? ($firstNumber + $thirdNumber) / ($secondNumber - $thirdNumber) : null;

echo "Сумма чисел: $sum\n";
echo "Разница первого и второго числа, умноженная на третье: $differenceAndMultiplication\n";
echo "Результат деления: " . ($division !== null ? $division : "Ошибка (деление на ноль)") . "\n";


echo "1. Равны ли результаты всех операций?\n";
if ($sum == $differenceAndMultiplication && ($division === null || $sum == $division)) {
    echo "Да, все результаты равны.\n";
} else {
    echo "Нет, результаты не равны.\n";
}

echo "2. Какой результат больше: сумма чисел или результат вычитания и умножения?\n";
if ($sum > $differenceAndMultiplication) {
    echo "Сумма чисел больше результата вычитания и умножения.\n";
} else {
    echo "Результат вычитания и умножения больше суммы чисел.\n";
}

echo "3. Является ли результат деления положительным числом?\n";
if ($division !== null) {
    if ($division > 0) {
        echo "Да, результат деления положительный.\n";
    } elseif ($division < 0) {
        echo "Нет, результат деления отрицательный.\n";
    } else {
        echo "Результат деления равен нулю.\n";
    }
} else {
    echo "Ошибка: деление на ноль.\n";
}
?>
