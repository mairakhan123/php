<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $day= $_POST['day'];
    if ($day=='monday'){
        $meal= "dal chawal";
    }
    elseif ($day=='tuesday'){
        $meal= 'qeema';
    }
    elseif ($day=='wednesday'){
        $meal= 'sabzi';
    }
    elseif ($day=='thursday'){
        $meal= 'kabab paratha';
    }
    elseif ($day=='friday'){
        $meal= 'fish';
    }
    elseif ($day=='saturday'){
        $meal= 'zinger';
    }
    else{
        $meal= 'palao';
    }
   

    ?>
     Today Meal Is : <?php echo $meal ?>
</body>
</html>
