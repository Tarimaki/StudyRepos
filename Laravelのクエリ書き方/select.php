<?php
    use Illuminate\Support\Facades\DB;

    //テーブル内の値全部とる
    public function getData($table){
        $data = $table->get();
    }

    //select文 引数に取得したいカラムを設置
    public function getSelectData($table){
        $data = $table->select('id', 'name')->get();
    }

    //where
    public function getWhereData($table, $searchTarget){

        //id = 2のデータを取得する
        $data = $table->where('id', 2)->get();
        
        //部分一致
        $data = $table->where('name', 'LIKE', '%' . $searchTarget . '%')->get();
    }
?>