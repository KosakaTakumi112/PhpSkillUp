<?php
    //桃のデータ作成
    $momo = [];
    for ($count = 0; $count < 15; $count++){
  // 実行する処理
     $momo[] = mt_rand(200,300);
    }
    
    $itigo = [];
     for ($count = 0; $count < 15; $count++){
  // 実行する処理
     $itigo[] = mt_rand(400,500);
    }
    
    //桃の最大値、最小値、平均値の結果出力
    echo "桃の値段の最小値：";
    print_r(min($momo));
    echo "\n桃の値段の最大値：";
    print_r(max($momo));
    echo "\n桃の値段の平均値：";
    print_r(array_sum($momo)/count($momo));
    
    //イチゴの最大値、最小値、平均値の結果出力
    echo "\nイチゴの値段の最小値：";
    print_r(min($itigo));
    echo "\nイチゴの値段の最小値：";
    print_r(max($itigo));
    echo "\nイチゴの値段の最小値：";
    print_r(array_sum($itigo)/count($itigo));
    
?>
