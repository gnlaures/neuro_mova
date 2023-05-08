<a href="<?php echo $cCardShopkeeper["href"] ?>" class="c-cardShopkeeper <?php echo $cCardShopkeeper["modifiers"] ?>">
    <div class="c-cardShopkeeper__icon">
        <img src="<?php echo $cCardShopkeeper["icon"] ?>" alt="">
    </div>
    <div class="c-cardShopkeeper__bg">
        <?php $cSkewBlock = array('modifiers' => '--double --primary');
        include('components/c-skewBlock/index.php'); ?>
    </div>
    <div class="c-cardShopkeeper__title">
        <h4><?php echo $cCardShopkeeper["title"] ?></h4>
    </div>
</a>