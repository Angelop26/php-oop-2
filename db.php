<?php
$products = [
$croccantini = new product('croccantini',new description('cibo','15/02/00'),new category('cani'),'https://images.eprice.it/nobrand/0/hres/213/202921213/3308CANEMIGSE10KGCRPRDID.0.jpg'),
$cuccia = new product('cuccia',new description('cuccia','150x200'),new category('cani'),'https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_SY355_.jpg'),
$pallina = new product('palla',new description('pallina','pallina di gomma colorata'),new category('cani'),'https://www.pacopetshop.it/3500-thickbox_default/palla-5-sensi-gioco-per-cani.jpg'),
];

foreach ($products as $value) {
    try {
        $value->setPrice(20);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}