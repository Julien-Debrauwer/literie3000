<?php require_once("header.php"); ?>
    <main class="container">
        <h1 class="page-title">Ajout d'un matelas</h1>
        <section class="matresses">
        <form action="" method="post">
            <div class="form-group">
                <label for="selectBrand">Marque du matelas:</label>
                <select name="brand" id="selectBrand">
                    <option <?= (isset($brand) && $brand === "Epeda") ? "selected" : "" ?> value="Epeda">Epeda</option>
                    <option <?= (isset($brand) && $brand === "Dreamway") ? "selected" : "" ?> value="Dreamway">Dreamway</option>
                    <option <?= (isset($brand) && $brand === "Bultex") ? "selected" : "" ?> value="Bultex">Bultex</option>
                    <option <?= (isset($brand) && $brand === "Dorsoline") ? "selected" : "" ?> value="Dorsoline">Dorsoline</option>
                    <option <?= (isset($brand) && $brand === "Memoryline") ? "selected" : "" ?> value="Memoryline">Memoryline</option>
                </select>
            </div>


            <div class="form-group">
                <label for="inputModel">Modèle:</label>
                <input type="text" name="model" id="inputModel" value="<?= isset($model) ? $model : "" ?>">
                <?php 
                    if (isset($errors["model"])){
                        echo "<span class=\"info-error\">{$errors["model"]}</span>";
                    }
                ?>
            </div>

            <div class="form-group">
                <label for="selectDimensions">Dimensions du matelas:</label>
                <select name="dimensions" id="selectDimensions">
                    <option <?= (isset($dimensions) && $dimensions === "90x190") ? "selected" : "" ?> value="90x190">90x190</option>
                    <option <?= (isset($dimensions) && $dimensions === "140x190") ? "selected" : "" ?> value="140x190">140x190</option>
                    <option <?= (isset($dimensions) && $dimensions === "160x200") ? "selected" : "" ?> value="160x200">160x200</option>
                    <option <?= (isset($dimensions) && $dimensions === "180x200") ? "selected" : "" ?> value="180x200">180x200</option>
                    <option <?= (isset($dimensions) && $dimensions === "200x200") ? "selected" : "" ?> value="200x200">200x200</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputImg">Photo:</label>
                <input type="text" name="img" id="inputImg" value="<?= isset($img) ? $img : "" ?>">
                <?php 
                    if (isset($errors["img"])){
                        echo "<span class=\"info-error\">{$errors["img"]}</span>";
                    }
                ?>
            </div>
            
            <div class="form-group">
                <label for="inputPrice">Prix:</label>
                <input type="text" name="price" id="inputPrice" value="<?= isset($price) ? $price : "" ?>">
                <?php 
                    if (isset($errors["price"])){
                        echo "<span class=\"info-error\">{$errors["price"]}</span>";
                    }
                ?>
            </div>



            <input class="form-btn" type="submit" value="Ajouter le matelas">
        </form>
        </section>
    </main>
<?php require_once("footer.php"); ?>