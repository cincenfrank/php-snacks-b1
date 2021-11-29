<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
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
    <title>Snack 2</title>
</head>

<body>
    <main>
        <h1>Posts</h1>

        <?php
        $postsKeysArray = array_keys($posts);
        for ($i = 0; $i < count($postsKeysArray); $i++) {
            $currentKey = $postsKeysArray[$i];
        ?>
            <section>
                <h2><?php echo $currentKey ?></h2>
                <ul>
                    <?php
                    for ($x = 0; $x < count($posts[$currentKey]); $x++) {
                        $currentPost = $posts[$currentKey][$x];

                    ?>

                        <li>
                            <article>
                                <h4>Title: <?php echo $currentPost["title"] ?></h4>
                                <p><strong>Text:</strong> <?php echo $currentPost["text"] ?></p>
                                <p><strong>Author:</strong> <?php echo $currentPost["author"] ?></p>
                            </article>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </section>
        <?php
        }
        ?>
    </main>
</body>

</html>