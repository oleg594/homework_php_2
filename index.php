<?php

/* 1. Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'. */
echo '<strong>Домашняя работа №2</strong><hr/>';


$a = 0;
echo $result = (empty($a)) ? 'Верно' : 'Неверно';
echo '<hr/>';


/* 2. Дано трехзначное число. Поменяйте среднюю цифру на ноль. */

$b = 345;
echo "$b<br/>";
$b = "$b";
$b[1] = '0';
echo "$b<hr/>";

/* 3. Если переменная $a равна или меньше 1, а переменная $b больше или
равна 3, то выведите сумму этих переменных, иначе выведите их разность
(результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0
и 6, 3 и 5. */
$a = 3;
$b = 5;

if ($a <= 1 && $b >= 3) $a += $b;
else$a -= $b;
echo "$a<hr/>";

/* 4. Дана строка с символами, например, 'abcde'. Проверьте, что первым
символом этой строки является буква 'a'. Если это так - выведите 'да', в
противном случае выведите 'нет'. */

$str = 'acde';
echo ($str[0] == 'a') ? 'Да' : 'Нет';

echo '<hr/>';

/* 5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр
равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном
случае выведите 'нет'. */

$str_num = '954459';
$firstPart = $str_num[0] + $str_num[1] + $str_num[2];
$secondPart = $str_num[3] + $str_num[4] + $str_num[5];
echo ($firstPart == $secondPart) ? 'Да' : 'Нет';
echo '<hr/>';

/* 6. Разработайте программу, которая определяла количество прошедших
часов по введенным пользователем градусах. Введенное число может быть от
0 до 360. */

$degree = 180;
$hour = floor($degree/30);
echo "$hour<hr/>";

/* 7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые
делятся на 5 и найдите сумму этих чисел. */

$sum = 0;
for ($i = 20; $i <=45; $i++){
    if (!($i % 5)) $sum += $i;
}
echo $sum.'<hr/>';

/* 8. Дано пятизначное число. Цифры на четных позициях «занулить».
Например, из 12345 получается число 10305. */

$n = 12345;
$n = "$n";
for ($i = 0; $i < 5; $i++){
    if ($i % 2) $n[$i] = 0;
}
echo "$n<hr/>";

/* 9. Дано число $num=1000. Делите его на 2 столько раз, пока результат
деления не станет меньше 50. Какое число получится? Посчитайте
количество итераций, необходимых для этого (итерация - это проход цикла).
Решите задачу сначала через цикл while, а потом через цикл for. */

$num=1000;
$i = 0;
while ($num > 50) {
    $num /=2;
    $i++;
}
echo "Итоговое число: $num <br>";
echo  "Количество итераций: $i<hr/>";

/* 10. Вывести на экран фигуру из звездочек:
*******
*******
*******
*******
(квадрат из n строк, в каждой строке n звездочек) */
$n = 10;
$space = '';
$star = '*';
for ($i = 0; $i < $n; $i++) {
    $str = '';
    for ($j = 0; $j < $n; $j++){
        $str .= ($j!=$n) ? '* ' : '*';
    }
    echo $str.'<br/>';
}









