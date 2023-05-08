<a class="c-cardProduct <?php echo $cCardProduct["modifiers"] ?>" href="<?php echo $cCardProduct["href"] ?>" title="<?php echo $cCardProduct["title"] ?>">
    <div class="c-cardProduct__head">
        <div class="c-cardProduct__head__bg">
            <?php $cSkewBlock = array('modifiers' => '');
            include('components/c-skewBlock/index.php'); ?>
        </div>
        <div class="c-cardProduct__head__picture">
            <img src="<?php echo $cCardProduct["picture"] ?>" alt="<?php echo $cCardProduct["picture"] ?>">
        </div>
        <ul class="c-cardProduct__head__tags">
            <?php foreach ($cCardProduct["tags"] as $tag) : ?>
                <li>
                    <?php
                        $cIconBlock = array(
                            "modifiers" => $tag["modifiers"],
                            "icon" => $tag["icon"],
                            "title" => $tag["caption"],
                        );
                        include('components/c-iconBlock/index.php');
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="c-cardProduct__content">
        <h3><?php echo $cCardProduct["title"] ?></h3>
    </div>
</a>