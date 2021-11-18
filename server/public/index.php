<?php
/**
 * @param array $array
 * @return boolean
 */
function dd(array $array):bool
{
    echo '<pre>';
    // phpcs:disable
    print_r($array);
    // phpcs:enable
    echo '</pre>';
    return true;
}
/**
 * @param string $word
 * @return string
 */
function isToManyWords($word): string
{
    $result = substr($word, -1);
    $predposledniySymbol = substr($word, -2);
    if ($result == 's' || $predposledniySymbol.$result == 'es' || $predposledniySymbol.$result == 'ys') {
        return $resultNew = 'Это множественное число слова';
    } else {
        return $resultNew = 'false - это единственное число';
    }
}

echo isToManyWords('bytes');
echo '<br>';
echo '<br>';
echo '<br>';

/**
 * @param integer ...$args
 * @return array
 */
function transformation(...$args): array
{
    $massivSlov = [
        '1' => ['a', 's', 'c', 'b', 'c'],
        '2' => ['ya', 'ba', 'ma', 'va', 'se'],
        '3' => ['one', 'two', 'war', 'boy', 'sec'],
        '4' => ['dock', 'bash', 'many', 'body', 'alex'],
        '5' => ['vasya', 'petya', 'kolya', 'zomby', 'costa'],
        '6' => ['dddddd', 'aaaaaa', 'shestl', 'gorila', 'bimboo'],
        '7' => ['seven77', 'eight88', 'nine333', 'horosho', 'apphone'],
        '8' => ['1234567s', 'kolua888', 'nadoelou', '888888ss', 'symphony'],
        '9' => ['999999999', 'brooklyn9', 'something', 'finally99', 'nakonecto'],
    ];

    $result = [];
    $count = count($args);
    for ($i = 0; $i < $count; $i++) {
        $findElement = $args[$i];

        if (array_key_exists($args[$i], $massivSlov)) {
            $randElem = array_rand($massivSlov[$findElement]);
            $result[] = $massivSlov[$findElement][$randElem];
            /*array_push($result, $massivSlov[$findElement][$randElem]);*/
            /*чем отличается array_push от присваивания ???*/
        } else {
            $result[] = 'вашего элемента '. $findElement . ' нет в искомом массиве';
        }
    }
    return $result;
}

echo '<pre>';
dd(transformation(5, 3, 7, 32));
echo '</pre>';

echo '<br>';
echo '<br>';
echo '<br>';

/*
 * Фермер просит вас посчитать сколько ног у всех его животных. Фермер разводит три вида:
 * курицы = 2 ноги коровы = 4 ноги свиньи = 4 ноги Фермер посчитал своих животных и
 * говорит вам, сколько их каждого вида. Вы должны написать функцию, которая возвращает
 * общее число ног всех животных.
Примеры:
36  == solution(2, 3, 5)
22  == solution(1, 2, 3)
50  == solution(5, 2, 8)
 */
/**
 * @param integer $chicken
 * @param integer $cows
 * @param integer $pigs
 * @return integer
 */
function calcSumLegs($chicken, $cows, $pigs) :int
{
    $chicken = $chicken * 2;
    $cows = $cows * 4;
    $pigs = $pigs * 4;

    return $result = $chicken + $cows + $pigs;
}

echo calcSumLegs(1, 4, 4);

echo '<br>';
echo '<br>';
echo '<br>';

//Создайте функцию которая принимает целое число и возвращает строку с названием фигуры,
// состоящий из переданного количество сторон.
/**
 * @param string $stroka
 * @return boolean
 */
function findFigure($stroka): boolean
{
    switch ($stroka) {
        case 'circle':
            echo 'это circle - фигура 1';
            break;
        case 'semi-circle':
            echo 'это semi-circle - фигура 2';
            break;
        case 'triangle':
            echo 'это triangle - фигура 3';
            break;
        case 'square':
            echo 'это square - фигура 4';
            break;
        case 'pentagon':
            echo 'это pentagon - фигура 5';
            break;
        case 'hexagon':
            echo 'это hexagon - фигура 6';
            break;
        case 'heptagon':
            echo 'это heptagon - фигура 7';
            break;
        case 'octagon':
            echo 'это octagon - фигура 8';
            break;
        case 'nonagon':
            echo 'это nonagon - фигура 9';
            break;
        case 'decagon':
            echo 'это decagon - фигура 10';
            break;
        default:
            echo 'у нас в базе нет такой фигуры';
    }
    return true;
}

findFigure('semi-circle');

//"circle"  == solution(1)
//"semi-circle"  == solution(2)
//"triangle"  == solution(3)
//"square"  == solution(4)
//"pentagon"  == solution(5)
//"hexagon"  == solution(6)
//"heptagon"  == solution(7)
//"octagon"  == solution(8)
//"nonagon"  == solution(9)
//"decagon"  == solution(10)

echo '<br>';
echo '<br>';
echo '<br>';

//Рассчитайте финальную оценку студента по пяти предметам.
// Если средняя оценка больше 90, то итоговая A.
// Если средняя оценка больше 80, то итоговая B. Если средняя оценка больше 70,
// то итоговая оценка C. Если средняя оценка больше 60, то итоговая оценка D.
// В остальных случаях итоговая оценка F.
//Примеры:
//"Grade: A"  == solution([90,91,99,93,100])
//"Grade: B"  == solution([92,77,85,84,84])
//"Grade: C"  == solution([70,72,78,72,70])
//"Grade: D"  == solution([60,61,62,63,70])
//"Grade: F"  == solution([50,42,20,31,0])
//"Grade: F"  == solution([10,9,2,3,5])
//
/**
 * @param integer ...$args
 * @return boolean
 */
function calcGraduation(...$args): boolean
{
    $summaForStudent = 0;
    $count = count($args);
    foreach ($args as $oneItem) {
        $summaForStudent += $oneItem;
    }
    $sredneeZnachenie = $summaForStudent / $count;
    if ($sredneeZnachenie >= 90) {
        echo 'Grade A';
    } elseif ($sredneeZnachenie >= 80 && $sredneeZnachenie < 90) {
        echo 'Grade B';
    } elseif ($sredneeZnachenie >= 70 && $sredneeZnachenie < 80) {
        echo 'Grade C';
    } elseif ($sredneeZnachenie >= 60 && $sredneeZnachenie < 70) {
        echo 'Grade D';
    } else {
        echo 'Grade F';
    }
    return true;
}

calcGraduation(78, 80, 80, 80, 80);

echo '<br>';
echo '<br>';
echo '<br>';

/*Дан массив строк, создайте функцию, которая создает новый массив,
содержащий строки, длины которых соответствуют наидлиннейшей строке.
Примеры:
["programms"]  == solution(["in","Soviet","Russia","frontend","programms","you"])
["clojure","greater"]  == solution(["using","clojure","makes","your","life","greater"])
["a","b","c","d"]  == solution(["a","b","c","d"])*/

$array = ['using', 'clojure', 'makes', 'your', 'life', 'greater'];
/**
 * @param array $array
 * @return array
 */
function findTooLengthElements(array $array): array
{
    $max_line = '';
    $newArray = [];
    foreach ($array as $key => $value) {
        if (iconv_strlen($max_line, 'utf-8') <= iconv_strlen($value, 'utf-8')) {
            $max_line = $value;
            $newArray[] = $max_line;
        }

    }
    $finishedMassive = [];

    $len = array_map('mb_strlen', $newArray);
    $biggestZnacheniya = array_keys($len, max($len));

    foreach ($biggestZnacheniya as $item) {
        array_push($finishedMassive, $newArray[$item]);
    }
    return $finishedMassive;
}

$fin = findTooLengthElements($array);

dd($fin);

echo '<br>';
echo '<br>';
echo '<br>';


/// Найдите второе наибольшее число в массиве.
///
///
///
$massive = [1, 3, 5];

$iskomoeZnachenie = $massive[0];
$bigZnach = $massive[0];
$smallZnach = $massive[0];

$count = count($massive);

for ($i = 0; $i < $count; $i++) {
    if ($massive[$i] < $bigZnach && $massive[$i] > $smallZnach) {
        $iskomoeZnachenie = $massive[$i];
    } elseif ($massive[$i] <= $smallZnach) {
        $smallZnach = $massive[$i];
    } elseif ($massive[$i] >= $bigZnach && $massive[$i] >= $iskomoeZnachenie) {
        $bigZnach = $massive[$i];
        if ($massive[$i] <= $bigZnach && $massive[$i] > $smallZnach) {
            $iskomoeZnachenie = $massive[$i];
        }
    } elseif ($massive[$i] >= $bigZnach) {
        $bigZnach = $massive[$i];
    } else {
        $iskomoeZnachenie = $massive[$i];
    }
}
dd($iskomoeZnachenie);

echo '<br>';
echo '<br>';
echo '<br>';

$frodoArray = ['Frodo', 'Sam', 'Three', 'Something', 'Human'];

$skolko = count($frodoArray);

for ($i = 0; $i < $skolko; $i++) {
    $result .= '';
    if (($frodoArray[$i] == 'Sam' && $frodoArray[$i + 1] == 'Frodo')
        || ($frodoArray[$i] == 'Frodo' && $frodoArray[$i + 1] == 'Sam')) {

        $result = 'Персонажи вместе';
        break;
    } else {

        $result = 'Персонажи врозь';
        continue;
    }
}
dd($result);
echo '<br>';
echo '<br>';
echo '<br>';
/**
 * @param integer $elem1
 * @param integer $elem2
 * @param integer $elem3
 * @return string
 */
function casino($elem1 = null, $elem2 = null, $elem3 = null): string
{
    if ($elem1 === $elem2 && $elem2 === $elem3 && $elem3 === $elem1) {
        $result = 'Вы выиграли';
    } else {
        $result = 'Вы проиграли';
    }
    return $result;
}

echo casino(25, 25, 25);
