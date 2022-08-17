<?php
    $csv = fopen('./test.csv', 'r');
    $i = 0;

    while($row = fgetcsv($csv)){
        //配列の中身のカウントを数えることでカラム個数を抽出
        $count = count($row);

        echo "<p>ROW[" . $i . "] = " . $count . "</p>";

        $i++;
    }
?>