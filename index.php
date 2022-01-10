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
        <h1>Users type:</h1>

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
            $normal_user = new Premium ('Daniele', 'Menculini', 25, 2014);
            ?>
            <h4><?php echo $normal_user->getFullName() ?></h4>
            <p>Lo sconto riservato a te UTENTE PREMIUM è del:
                <?php echo $normal_user->getSale() ?>%
            </p>
        </div>

        <!-- Employee -->
        <div>
            <h2>Employee</h2>
            <?php
            $normal_user = new Employee ('Daniele', 'Menculini', 25, 3);
            ?>
            <h4><?php echo $normal_user->getFullName() ?></h4>
            <p>Lo sconto riservato a te DIPENDENTE è del:
                <?php echo $normal_user->getSale() ?>%
            </p>
        </div>
    </main>
</body>

</html>