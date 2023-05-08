<div class="c-cardIcon <?php echo $cCardIcon["modifiers"] ?>">
    <div class="c-cardIcon__hero">
        <div class="c-cardIcon__icon">
            <?php include($cCardIcon["content"]["icon"]) ?>
        </div>
        <div class="c-cardIcon__content">
            <div class="c-defaultContentStyle">
                <h4><?php echo $cCardIcon["content"]["title"] ?></h4>
                <p><?php echo $cCardIcon["content"]["text"] ?></p>
            </div>
        </div>
        <div class="c-cardIcon__more">
            <?php $cReadmore = array(
                "modifiers" => $cCardIcon["readmore"]["modifiers"],
                "href" => $cCardIcon["link"]["href"],
                "title" => $cCardIcon["content"]["title"],
                "svg_icon_path" => "media/icons/icon_caretDouble.svg",
                "caption" => $cCardIcon["readmore"]["caption"],
            );
            include('components/c-readMore/index.php'); ?>
        </div>
    </div>
</div>