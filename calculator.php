<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice sur les superglobales</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        label {
            padding-left: 0.25em;
            padding-top: 0.25em;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="bg-euros mx-auto py-4 px-4 rounded-lg" style="background-image: url(fond-calc.jpg); background-size: cover">
            <?php
                $n1 = null;                                                         
                if (isset($_GET["n1"]) && !empty($_GET["n1"])) {
                    $n1 = $_GET['n1'];
                }

                $n2 = null;                                                         
                if (isset($_GET["n2"]) && !empty($_GET["n2"])) {
                    $n2 = $_GET['n2'];
                }

                $op = null;                                                         
                    if (isset($_GET["op"]) && !empty($_GET["op"])) {
                        $op = $_GET['op'];
                    }
            ?>
            <div class="fond form-group mb-0 px-4 py-2 rounded-lg" style="background-color: #E3E3E2; opacity: 0.9">
                <h2 class="text-center pt-2">CALCULETTE</h2>
                <form autocomplete="off">
                    <label for="n1">Nombre 1</label>
                    <input type="number" class="form-control" name="n1" value="<?php echo $n1; ?>" placeholder="nombre 1">
                    <label for="n2">Nombre 2</label>
                    <input type="number" class="form-control" name="n2" value="<?php echo $n2; ?>" placeholder="nombre 2">
                    <label for="op">Opération</label>
                    <select class="form-control" name="op">
                        <option <?php if ($op === "Addition") {echo "selected";}?>>Addition</option>
                        <option <?php if ($op === "Soustraction") {echo "selected";}?>>Soustraction</option>
                        <option <?php if ($op === "Multiplication") {echo "selected";}?>>Multiplication</option>
                        <option <?php if ($op === "Division") {echo "selected";}?>>Division</option>
                    </select>
                    <br/>
                    <button class="btn btn-primary">Calculer</button>            
                </form>
                <br/>
                <?php
                // echo "La somme est égale à : ".($n1 + $n2);
                if ($n1 !== null && $n2 !== null) {
                    if ($op === "Addition") {
                        echo "<h3 class='text-center'>La somme de $n1 par $n2 est égale à : ".($n1 + $n2). "</h3>";
                    } else if ($op === "Soustraction") {
                        echo "<h3 class='text-center'>La soustraction de $n1 par $n2 est égale à : ".($n1 - $n2)."</h3>";
                    } else if ($op === "Multiplication") {
                        echo "<h3 class='text-center'>La multiplication de $n1 par $n2 est égale à : ".($n1 * $n2)."</h3>";
                    } else if ($op === "Division") {
                        echo "<h3 class='text-center'>La division de $n1 par $n2 est égale à : ".round(($n1 / $n2), 2)."</h3>";
                    } 
                }                

                ?>
            <!-- # TP Conversion Euros vers bitcoins

            1. Créer un formulaire avec un champ où on saisit une valeur en euros
            2. Ajouter un bouton "Convertir". Au clic, on affiche la conversion en Bitcoins
            3. Ajouter un select pour choisir le sens de conversion
                - Euros vers bitcoins
                - Bitcoins vers euros -->

                <?php
                    $price = null;                                                         
                    if (isset($_GET["price"]) && !empty($_GET["price"])) {
                        $price = $_GET['price'];
                    }

                    $money = null;
                    if (isset($_GET["money"]) && !empty($_GET["money"])) {
                        $money = $_GET['money'];
                    }

                ?>
                <br/><br/>
                <h2 class="text-center">CONVERSION EUROS/BITCOINS</h2>
                <form autocomplete="off">
                    <label for="price">Prix </label>
                    <input type="number" class="form-control" name="price" value="<?php echo $price; ?>" placeholder="Prix">
                    <div>
                        <input type="radio" id="euros"
                                name="money" value="euros">
                        <label for="euros">Euros</label>
                        <br/>
                        <input type="radio" id="bitcoins"
                                name="money" value="bitcoins">
                        <label for="bitcoins">Bitcoin</label>
                    </div>
                    <button class="btn btn-primary mb-3">Convertir</button>
                </form>          
                <?php
                    $convert = ""; 
                    $e_b = 0.000064;
                    $b_e = 15600.62;
                    if ($money === "euros") {
                        $convert = "bitcoins";                
                        echo "<h3 class='text-center'>$price $money vaut ".round(($price * $e_b), 4)." $convert</h3>";
                    } else if ($money === "bitcoins") {
                        $convert = "euros";
                        echo "<h3 class='text-center'>$price $money vaut ".round(($price * $b_e), 2)." $convert</h3>";
                    }
                ?>

            </div>
             
        </div>        
        <footer class="d-block text-center pt-2">Copyright &copy; 2020 - Marjolaine VILAIN</footer> 
    </div>
                  
</body>
</html>
