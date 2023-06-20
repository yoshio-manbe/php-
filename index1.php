<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>

    <form action="write.php" method="post"> 
        <ol>
            <li>
                物件名: <input type="text" name="place1">
                住所: <input type="text" name="address1">
                <select name="color1" id="color1">
                    <option value="無所属">--種類--</option>
                    <option value="住宅">住宅</option>
                    <option value="飲食店">飲食店</option>
                    <option value="娯楽施設">娯楽施設</option>
                    <option value="その他">その他</option>
                </select>
            </li>
            <li>
                物件名: <input type="text" name="place2">
                住所: <input type="text" name="address2">
                <select name="color2" id="color2">
                    <option value="無所属">--種類--</option>
                    <option value="住宅">住宅</option>
                    <option value="飲食店">飲食店</option>
                    <option value="娯楽施設">娯楽施設</option>
                    <option value="その他">その他</option>
                </select>
            </li>
            <li>
                物件名: <input type="text" name="place3">
                住所: <input type="text" name="address3">
                <select name="color3" id="color3">
                    <option value="無所属">--種類--</option>
                    <option value="住宅">住宅</option>
                    <option value="飲食店">飲食店</option>
                    <option value="娯楽施設">娯楽施設</option>
                    <option value="その他">その他</option>
                </select>
            </li>
        </ol>

        <input type="submit" value="送信">

    </form>

    <select name="result" id="result">
        <option value="無所属">--種類--</option>
        <option value="住宅">住宅</option>
        <option value="飲食店">飲食店</option>
        <option value="娯楽施設">娯楽施設</option>
        <option value="その他">その他</option>
    </select>
    <button id="open">履歴を確認</button>

    <div class="output">
        <?php
            // ファイルを読み込む
            $data1 = file_get_contents('data/data1.txt');
            $data2 = file_get_contents('data/data2.txt');
            $data3 = file_get_contents('data/data3.txt');
            $data4 = file_get_contents('data/data4.txt');

        ?>

        <div class="house">
            <p>住宅</p>
            <textarea rows="5" cols="50">
                <?php echo $data1; ?>
            </textarea>
        </div>
        
        <div class="food">
            <p>飲食店</p>
            <textarea rows="5" cols="50">
                <?php echo $data2; ?>
            </textarea>
        </div>

        <div class="work">
            <p>娯楽施設</p>
            <textarea rows="5" cols="50">
                <?php echo $data3; ?>
            </textarea>
        </div>

        <div class="others">
            <p>その他</p>
            <textarea rows="5" cols="50">
                <?php echo $data4; ?>
            </textarea>
        </div>
        

        
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="./js/script1.js"></script>
</body>
</html>