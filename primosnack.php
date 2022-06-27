<?php 
    $arrayPartite = [
        [
            ['nome' => 'Olimpia Milano',
            'casa' => true,
            'punti' =>    55],
            ['nome' => 'Cantù',
            'casa' => false,
            'punti' =>    62],
        ],
        [
            ['nome' => 'Bari',
            'casa' => true,
            'punti' =>    67],
            ['nome' => 'Reggio',
            'casa' => false,
            'punti' =>    78],
        ],
        [
            ['nome' => 'Roma',
            'casa' => true,
            'punti' =>    89],
            ['nome' => 'Firenze',
            'casa' => false,
            'punti' =>   85],
        ],
    ];

// var_dump($arrayPartite);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $arrLength = count($arrayPartite);
        for ($i=0; $i < $arrLength; $i++) { 
            $partita = $arrayPartite[$i];
            echo "<div> {$partita[0]['nome']} - {$partita[1]['nome']}  ||  {$partita[0]['punti']} - {$partita[1]['punti']} </div>"; 
        }
    ?>
    
</body>
</html>
