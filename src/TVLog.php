<?php

$channels = [];

while (true){
    echo '1〜3を押して処理を指示してください' . PHP_EOL;
    echo '1:TVログの登録' . PHP_EOL;
    echo '2:TVログの表示' . PHP_EOL;
    echo '3:終了' . PHP_EOL;
    $key = trim(fgets(STDIN));

    //視聴時間の登録
    if ($key === '1'){
    echo 'テレビの視聴ログを登録してください' . PHP_EOL;
    echo 'テレビチャンネル :';
    $name = trim(fgets(STDIN));
    echo '視聴時間 :';
    $time = trim(fgets(STDIN));
    echo '視聴回数 :';
    $number = trim(fgets(STDIN));
    echo '登録が完了しました' . PHP_EOL;

    $channels[] = [
        'name' => $name,
        'time' => $time,
        'number' => $number
    ];

    } elseif ($key === '2') {
    //視聴時間を表示
    echo 'TVログを表示します' . PHP_EOL;
        foreach($channels as $channel){
        echo '視聴チャンネル：' . $channel['name'] . PHP_EOL;
        echo '視聴時間：' . $channel['time'] . PHP_EOL;
        echo '視聴回数：' . $channel['number'] . PHP_EOL;
        }
    } elseif ($key === '3') {
        break;
    }
}
