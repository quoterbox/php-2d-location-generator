<?php
require_once "./src/app.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php for($x = 0; $x < $xSize; $x++):?>
        <?php for($y = 0; $y < $ySize; $y++):?>
            <?php if(!empty($map[$x][$y]['path'])):?>
                <img src="<?=$map[$x][$y]['path']?>" alt="<?=$map[$x][$y]['name']?>">
            <?php else:?>
                <img src="<?="Assets" . DIRECTORY_SEPARATOR . 'empty.' . $filesExt?>" alt="empty">
            <?php endif?>
        <?php endfor;?>
        <br>
    <?php endfor;?>
</body>
</html>


