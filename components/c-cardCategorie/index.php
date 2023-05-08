<a href="<?php echo $cCardCategorie["href"] ?>" class="c-cardCategorie <?php echo $cCardCategorie["modifiers"] ?>">
    <div class="c-cardCategorie__head">
        <div class="c-cardCategorie__head__icon">
            <img src="<?php echo $cCardCategorie["icon"] ?>" alt="<?php echo $cCardCategorie["title"] ?>">
        </div>
        <div class="c-cardCategorie__head__bg">
            <?php $cSkewBlock = array('modifiers' => '--double --black');
            include('components/c-skewBlock/index.php'); ?>
        </div>
    </div>
    <div class="c-cardCategorie__content">
        <h4><?php echo $cCardCategorie["title"] ?></h4>
    </div>
</a>