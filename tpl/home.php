<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Literie 3000 | Morphée vous tend les bras</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
    <?php
    $home = true;
    require_once("header.php");
    ?>

    <body>

        <main class="container">
            <section class="matresses">
                <ul>
                <?php
                foreach ($mattresses as $mattress) {
                ?>
                    <li class="mattress">
                        <div class="mattress-img">
                            <img src=<?= $mattress["img"] ?> alt="">
                        </div>
                        <div class="mattress-infos">
                            <h2 class="mattress-title"><?= $mattress["brand"] ?></h2>
                            <h3 class="mattress-model">Matelas <?= $mattress["model"] ?></h3>
                            <p class="mattress-dimension"><?= $mattress["dimensions"] ?></p>
                            <p class="mattress-price"><?= $mattress["price"] ?></p>
                            <p class="mattress-promo">759,00</p>
                        </div>
                    </li>
                <?php
                }
                ?>
                </ul>
                
            </section>
        </main>

    <?php require_once('footer.php'); ?>