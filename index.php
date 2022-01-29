<?php
require_once __DIR__.'/BuffaloCheese.php';
require_once __DIR__.'/CowCheese.php';
require_once __DIR__.'/SheepCheese.php';
require_once __DIR__.'/User.php';

$buffalo_mozzarella=new BuffaloCheese('Azienda Agricola Tempio','250g',9.90,'Mozzarella');
var_dump($buffalo_mozzarella);
$gorgonzola=new CowCheese('Casarrigoni','350g',8.40,'Gorgonzola');
var_dump($gorgonzola);
$pecorino=new SheepCheese('De\'Magi','325g',12.90,'Pecorino');
var_dump($pecorino);

$user=new User('Mario','Rossi','mariorossi@emil.it');
$user->addProduct($pecorino);
$user_cart=$user->getCart()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italian Cheese</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>This is you cart:</h2>

    <?php foreach($user_cart as $product) { ?>
        <div class="shopping_cart">
            <h3><?php echo $product->farmer?></h3>
            <h4><?php echo $product->typeCheese?></h4>
            <p><?php echo $product->weight?></p>
            <p><?php echo $product->milk?></p>
            <h4>€: <?php echo number_format($product->price, 2, '.', ',')?></h4>
        </div>
    <?php } ?>
    
</body>
</html>