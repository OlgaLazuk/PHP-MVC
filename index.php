<?php
// 1.  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
function Week($dayNumber) {
    $arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 77=>'Воскресенье'];
    return $arr[$dayNumber];
}
echo Week(3);

// 2. Создайте функцию, которая обрезает строку до нужного размера.  Необходимо учесть, что слово в конце строки не должно быть обрезано
function cutStr($str, $length=2, $postfix='...')
{
    if ( strlen($str) <= $length)
        return $str;

    $temp = substr($str, 0, $length);
    return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
}
echo cutStr('Hello world');

// 3.  Написать функцию, которая будет менять порядок слов в строке на обратный
$str = 'I am a string';
function reverse($line)
{
    $arr = explode(' ', $line);
    $arr = array_reverse($arr);
    $arr = implode(' ', $arr);
    return ($arr);
}
print_r(reverse($str));

// 4. Написать функцию, которая вычисляет среднее арифметическое элементов массива, переданного ей в качестве аргумента.  Не использовать array_sum и т.д. Простым перебором через цикл
function averageValue($a){
    $sum = 0;
    foreach ($a as $v) {
        $sum += $v;
        $avVal = $sum / count($a);
    }
    echo $avVal;
    return $sum;
}
print_r(averageValue([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));

// 5.  Написать функцию, которая генерирует массив случайных значений. Количество элементов массива передается в качестве аргумента
function randVal($num)
{
    foreach (range(0, 10) as $num)
        $arr[] = rand();
    return $arr;
}
print_r(randVal(5));