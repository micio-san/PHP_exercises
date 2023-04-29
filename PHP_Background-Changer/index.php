<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    $answ = '';
    if (array_key_exists("sendReq", $_POST)) {
        global $answ;
        $answ = "#" . generateRand();
    }

    function generateRand()
    {
        $nums = [];
        $arrs = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"];
        for ($i = 0; $i <= 5; $i++) {
            $idx = rand(0, count($arrs) - 1);
            array_push($nums, $arrs[$idx]);
        }
        return implode($nums);
    }

    ?>
    <div style="font-family: sans-serif;background-color: <?php echo $answ; ?>; height: 100vh; display :flex; align-items:center;justify-content: center;" class="container">
        <form style="display: flex;flex-direction: column;align-items: center;justify-content: center; width: 350px;height: 250px; background-color: #00000080; border-radius: 10px;" method="post">
            <article style="width: 80%;border:2px solid white;height: 60px; text-align: center;line-height: 60px;border-radius: 10px;background-color: #00000080;">
                <h2 style="color:white; font-size: 30px;font-weight: 300; "><?php echo $GLOBALS["answ"]; ?></h2>
            </article>
            <button style="margin-top: 30px;height: 40px;width: 70%; font-size: 20px;color:white;border:2px solid white;background-color:black;cursor: pointer;" name="sendReq" type="submit">Change Background</button>
        </form>
    </div>
</body>

</html>