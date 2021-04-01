
    <?php
    $home = true;
    require_once("header.php");
    ?>

    <main class="container">
        <h1 class="page-title">Catalogue de nos matelas</h1>
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
                        <p class="mattress-promo"><?= $mattress["price"] ?></p>
                    </div>
                </li>
            <?php
            }
            ?>
            </ul>
            
        </section>
    </main>

<?php require_once('footer.php'); ?>