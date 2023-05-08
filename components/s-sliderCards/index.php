<section class="s-sliderCards <?php echo $sSliderCards["modifiers"] ?>">
    <div class="u-container">
        <div class="s-sliderCards__head">
            <div class="c-defaultContentStyle">
                <h2><?php echo $sSliderCards["title"] ?></h2>
            </div>
        </div>
        <div class="s-sliderCards__content">
            <?php include($sSliderCards["slider"]); ?>
        </div>
    </div>
</section>