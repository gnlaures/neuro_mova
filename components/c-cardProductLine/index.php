<div class="c-cardProductLine  <?php echo $cCardProductLine["modifiers"] ?>">
    <div class="c-cardProductLine__head">
        <div class="c-cardProductLine__head__tagline">
            <img src="<?php echo $cCardProductLine["tagline"] ?>" alt="<?php echo $cCardProductLine["title"] ?>">
        </div>
        <div class="c-cardProductLine__head__bg">
            <?php $cSkewBlock = array('modifiers' => '');
            include('components/c-skewBlock/index.php'); ?>
        </div>
        <div class="c-cardProductLine__head__picture">
            <img src="<?php echo $cCardProductLine["picture"] ?>" alt="<?php echo $cCardProductLine["picture_alt"] ?>">
        </div>
    </div>
    <div class="c-cardProductLine__content">
        <div class="c-defaultContentStyle">
            <p><?php echo $cCardProductLine["text"] ?></p>
        </div>
        <?php $cBtn = array(
            "modifiers" => "--l",
            "caption" => $cCardProductLine["button_caption"],
            "icon" => "",
            "tag" => "a",
            "href" => "products",
            "a_title" => "Conheça os Produtos da ". $cCardProductLine["title"]);
        include('components/c-btn/index.php'); ?>
    </div>
</div>