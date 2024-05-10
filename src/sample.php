<?php

//$number = 1;
//
//if ($number === true){
//    echo 'true' . PHP_EOL;
//} elseif ($number === 1){
//    echo '1' . PHP_EOL;
//} else {
//    echo 'default' . PHP_EOL;
//}
//switch分だと１がtrueに暗黙変換されるので上記に修正
//switch ($number) {
//    case true:
//        echo 'true' . PHP_EOL;
//        break;
//    case 1:
//        echo '1' . PHP_EOL;
//        break;
//    default:
//        echo 'default' . PHP_EOL;
//        break;
//}





//declare(strict_types=1);
//function double(int $number):int {
//    return $number * 2;
//}
//echo double('1.5') . PHP_EOL;

//$a = null;
//unset($a);
//var_dump($a);

//if (null) {
//    echo 'true' . PHP_EOL;
//} else {
//    echo 'false' . PHP_EOL;
//}


//var_dump(mb_convert_kana('1', 'Kas') === mb_convert_kana('１', 'Kas'));


//$str1 = 'abcde';
//$str2 = 'あいうえお';
////
//echo strlen($str1) . PHP_EOL;
//echo strlen($str2) . PHP_EOL;
//echo mb_strlen($str2) . PHP_EOL;
//


//$number = bcadd('0.1', '0.2', 1);
//var_dump((float) $number === 0.3);

//const MAXIMUM_NAME_LENGTH = 10;
//echo '名前を入力してください' . PHP_EOL;
//$name = trim(fgets(STDIN));
//
//if (mb_strlen($name) < MAXIMUM_NAME_LENGTH) {
//    echo '名前の長さはOK！' . PHP_EOL;
//} else {
//    echo '名前が長すぎます' . PHP_EOL;
//}

//const TAX = 0.1;
//$price = 100 * (1 + TAX);
//echo $price . PHP_EOL;


//$count = 0;
//function test($count)
//{
//    $count++;
//    echo $count;
//    if ($count <10){
//        test($count);
//    }
//}
//test($count);


//$a = 'php';
//$b[0] ='z';

//echo $a . PHP_EOL;
//echo $b . PHP_EOL;



//$c = 'php';
//$d = &$c;
//$c[0] = 'z';

//echo $c . PHP_EOL;
//echo $d . PHP_EOL;
