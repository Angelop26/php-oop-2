<?php
require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/categories.php';
require_once __DIR__ . '/models/description.php';
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row row-cols-3">
            <?php foreach ($products as $product) { ?>
                <div class="col d-flex">
                    <div class="card d-flex flex-column justify-content-between">
                        <img src="<?php echo $product->poster ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name ?></h5>
                            <p class="card-text"><?php echo $product->getPrice() ?></p>
                            <p class="card-text"><?php echo $product->categories->category ?></p>
                            <p class="card-text"><?php echo $product->description->name ?></p>
                            <?php if($product->description->name =='cuccia'){?>
                                <p class="card-text"><?php echo $product->description->dimension ?></p>
                            <?php } elseif($product->description->name =='cibo'){?>
                                <p class="card-text"><?php echo $product->description->date ?></p>
                            <?php }elseif($product->description->name =='giochi'){?>
                                <p class="card-text"><?php echo $product->description->game ?></p>    
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>