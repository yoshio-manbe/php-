<?php
    // ファイルを読み込む
    $data1 = file_get_contents('data/data1.txt');
    $data2 = file_get_contents('data/data2.txt');
    $data3 = file_get_contents('data/data3.txt');
    $data4 = file_get_contents('data/data4.txt');

?>

<textarea rows="5" cols="50">
    <?php echo $data1; ?>
</textarea>

<textarea rows="5" cols="50">
    <?php echo $data2; ?>
</textarea>

<textarea rows="5" cols="50">
    <?php echo $data3; ?>
</textarea>
