<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks</title>
</head>
<body>
    <p><?= $beverage2->getInfo(); ?></p>
    <p><?= $beverage2->getAlcoholPercentage(); ?></p>
    <p><?= $beverage2->getColor(); ?></p>
    <?php $beverage2->setColor("light");?>
    <p><?= $beverage2->getColor(); ?></p>

</body>
</html>