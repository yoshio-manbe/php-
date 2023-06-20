<?php
    // Initialize $data variable to an empty string
    $data = "";
    
    // Use the $name, $mail, and $password variables inside the loop to concatenate their values to the $data variable
    for ($i = 1; $i <= 4; $i++) {
        // Check if the $_POST data exists for each value of $i
        if(isset($_POST['place' . $i], $_POST['address' . $i], $_POST['color' . $i])) {
            $place = $_POST['place' . $i];
            $address = $_POST['address' . $i];
            $color = $_POST['color' . $i];

            // 変数を用意
            $time = date("Y-m-d H:i:s");
            $data = $time . ',' . $place . ',' . $address . ',' . $color . "\n";

            if ($color === "住宅" ){
                file_put_contents('data/data1.txt', $data , FILE_APPEND);
            } elseif ($color === "飲食店"){
                file_put_contents('data/data2.txt', $data , FILE_APPEND);
            } elseif ($color === "娯楽施設"){
                file_put_contents('data/data3.txt', $data , FILE_APPEND);
            } elseif ($color === "その他"){
                file_put_contents('data/data4.txt', $data , FILE_APPEND);
            }
            
        }

    }
?>
<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>送信完了！</p>
    <ul>
        <li><a href="index1.php">戻る</a></li>
    </ul>
</body>

</html>
