<?php
    class ColumnCountException extends Exception{
        public function __construct(){
            parent::__construct("カラム個数間違ってるよ",1);
        }
    }

    

    function ColumnCount(){
        $csv = fopen('./test.csv', 'r');
        $i = 0;
        while($row = fgetcsv($csv)){
            //配列の中身のカウントを数えることでカラム個数を抽出
            $count = count($row);
    
            echo "<p>ROW[" . $i . "] = " . $count . "</p>";
    
            $i++;
    
            if($count != 5){
                throw new ColumnCountException();
            }
        }
    }
    
    try{
        ColumnCount();
    }catch(Exception $ex){
        echo "<p>" . $ex . "</p>";
    }
?>