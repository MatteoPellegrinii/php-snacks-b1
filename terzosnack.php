<?php 
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
            'url' => 'https://picsum.photos/200/300'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Diletta Leotta',
            'text' => 'Testo post 2',
            'url' => 'https://picsum.photos/200/300'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Fedez',
            'text' => 'Testo post 3',
            'url' => 'https://picsum.photos/200/300'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Obama',
            'text' => 'Testo post 4',
            'url' => 'https://picsum.photos/200/300'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Trump',
            'text' => 'Testo post 5',
            'url' => 'https://picsum.photos/200/300'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Messi',
            'text' => 'Testo post 6',
            'url' => 'https://picsum.photos/200/300'
        ]
    ],
];
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
    $keys =  array_keys($posts);
    for ($i=0; $i < count($posts); $i++) {
        $post = $posts[$keys[$i]];
        echo "<div> {$keys[$i]} </div>";
        for ($j=0; $j < count($post) ; $j++) { 
            $page = $post[$j];
            echo "<div> {$page['author']} <br> {$page['title']} </div> ";
            echo "<img src={$page['url']} >";
            echo "<div> {$page['text']} ";
        }
    }
    ?>
</body>
</html>