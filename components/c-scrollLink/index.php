<a href="<?php echo $cScrollLink["href"] ?>" class="c-scrollLink <?php echo $cScrollLink["modifiers"] ?>" title="<?php echo $cScrollLink["title"] ?>">
    <span class="c-scrollLink__icon">
        <?php include('media/icons/icon_scroll.svg');?>
    </span>
    <span class="c-scrollLink__hero">
        <div class="c-scrollLink__hero__caption"><?php echo $cScrollLink["caption"] ?></div>
        <div class="c-scrollLink__hero__call"><?php echo $cScrollLink["title"] ?></div>
    </span>
</a>