<!-- 
    Import different type class
 -->
<?php
require_once __DIR__ . '/classes/Products_class/Products.php';
require_once __DIR__ . '/classes/Users_class/Users.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Prozis</title>
</head>

<body>
    <main>
        <!-- Users type section -->
        <section>
            <h1>User types:</h1>

            <!-- Normal -->
            <div>
                <h2>Normal</h2>
                <?php
                $normal_user = new User('Daniele', 'Menculini', 25);
                ?>
                <h4><?php echo $normal_user->getFullName() ?></h4>
                <p>Lo sconto riservato a te è del:
                    <?php echo $normal_user->getSale() ?>%
                </p>
            </div>

            <!-- Premium -->
            <div>
                <h2>Premium</h2>
                <?php
                $premium_user = new Premium('Daniele', 'Menculini', 25, 2014);
                ?>
                <h4><?php echo $premium_user->getFullName() ?></h4>
                <p>Lo sconto riservato a te UTENTE PREMIUM è del:
                    <?php echo $premium_user->getSale() ?>%
                </p>
            </div>

            <!-- Employee -->
            <div>
                <h2>Employee</h2>
                <?php
                $employee_user = new Employee('Daniele', 'Menculini', 25, 3);
                ?>
                <h4><?php echo $employee_user->getFullName() ?></h4>
                <p>Lo sconto riservato a te DIPENDENTE è del:
                    <?php echo $employee_user->getSale() ?>%
                </p>
            </div>
        </section>

        <hr>

        <!-- Product type section-->
        <section>
            <h1>Product types:</h1>

            <!-- Normal product -->
            <div>
                <h2>Normal</h2>
                <?php
                $normal_product = new Product('Polsini da palestra', 'Accessorio', 12, 9)
                ?>
                <h4><?php echo $normal_product->getProduct() ?></h4>
                <p>Il prezzo dell'articolo è:
                    <?php echo $normal_product->getPrice() ?> €
                </p>
            </div>

            <!-- Clothes product -->
            <div>
                <h2>Abbigliamento</h2>
                <?php
                $clothes_product = new Clothes('Cabottiera Prozis', 'T-Shirt', 19, 4, 'Red', 'L')
                ?>
                <h4><?php echo $clothes_product->getProduct() ?></h4>
                <p>
                    <?php echo $clothes_product->getDescription() ?>
                </p>
                <p>Il prezzo del capo d'abbigliament è:
                    <?php echo $clothes_product->getPrice() ?> €
                </p>
            </div>

            <!-- Clothes product -->
            <div>
                <h2>Alimento</h2>
                <?php
                $food_product = new Food('Pepperoni pizza', 'Alimento pronto', 25, 9, 2);
                ?>
                <h4><?php echo $food_product->getProduct() ?></h4>
                <p>Il prodotto è: 
                    <?php echo $food_product->getFreshness() ?>
                </p>
                <p>Il prezzo della pietanza è:
                    <?php echo $food_product->getPrice() ?> €
                </p>
            </div>
        </section>
    </main>
</body>

</html>