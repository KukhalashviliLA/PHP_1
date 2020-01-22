<?php

// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
// Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
// ноль можно считать положительным числом.

$a = -6;
$b = -5;

if ($a >= 0 && $b >= 0) {
   echo $a - $b;
}
elseif ($a < 0 && $b < 0) {
    echo ($a * $b);
}
else { 
    echo ($a + $b);
}

echo "<br>";

// 2. Присвоить переменной $c значение в промежутке [0..15]. 
// С помощью оператора switch организовать вывод чисел от $c до 15.
$c = rand(0, 15);
switch ($c) {
    case 0:
        echo  "0 <br>";
    case 1:
        echo  "1 <br>";
    case 2:
        echo  "2 <br>";
    case 3:
        echo  "3 <br>";
    case 4:
        echo  "4 <br>";
    case 5:
        echo  "5 <br>";
    case 6:
        echo  "6 <br>";
    case 7:
        echo  "7 <br>";
    case 8:
        echo  "8 <br>";
    case 9:
        echo  "9 <br>";
    case 10:
        echo  "10 <br>";
    case 11:
        echo  "11 <br>";
    case 12:
        echo  "12 <br>";
    case 13:
        echo  "13 <br>";
    case 14:
        echo  "14 <br>";
    case 15:
        echo  "15 <br>";
    break;
    
}

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.

function sum($x, $y) {
    return $x + $y;
};

function sub($x, $y) {
    return $x - $y;
};

function split($x, $y) {
    if ($y === 0) {
        return "Ба-ла-ла на ноль делить нельзя!";
    } else {
        return $x / $y;
    }
};

function inc($x, $y) {
    return $x * $y;
};


echo sum(3, 4);
echo "<br>";
echo sub(3, 4);
echo "<br>";
echo split(3, 0);
echo "<br>";
echo inc(3, 4);
echo "<br>";


// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
// и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return $arg1 + $arg2;
            break;
        case "-":
            return $arg1 - $arg2;
            break;
        case "/":
            if ($arg2 === 0) {
                return "Ба-ла-ла на ноль делить нельзя!";
            } else {
                return $arg1 / $arg2;
            }
            break;
        case "*":
            return $arg1 * $arg2;
            break;
        default;

    }
}

echo mathOperation (5, 5, "+");
echo "<br>";

// 5. Посмотреть на встроенные функции PHP. 
// Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

// реализовано в lesson_1


// 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    return $val * power($val, $pow - 1);
}
echo "power <br>";
echo power(5, 2);
echo "<br>";


//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,
//например:
//22 часа 15 минут
//21 час 43 минуты

$h = date("H"); //перемеменная часы.
$m = date("i"); // переменная минуты.
if ($h==1 || $h==21) {
    $hours = " час";}   // если 1 или 21 час то выводить " час".
elseif (($h>=2 && $h<=4) || ($h>=22)) {
    $hours = " часа";}   // если от 2 до 4 и 22 и более часа то выводить " часа".
else {$hours = " часов";} // иначе выводить " часов".
if (($m % 10) === 1) {
    $minutes = " минута";}  // если при делении по модулю остаток равен 1 то выводить " минута".
elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
    $minutes = " минуты";} // если при делении по модулю остаток равен от 2 до 4 то выводить " минуты".
else {
    $minutes = " минут";}   // иначе выводим " минут".
echo $h . $hours . " " . $m . $minutes;
