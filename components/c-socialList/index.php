<ul class="c-socialList <?php echo $cSocialList["modifiers"] ?>">
    <?php foreach ($cSocialList["social_items"] as $social_item): ?>
        <li>
            <a href="<?php echo $social_item["link"]; ?>" title="<?php echo $social_item["caption"]; ?>" class="c-socialList__item <?php echo $social_item["theme"]; ?>">
                <i><?php echo file_get_contents($social_item["icon"]); ?></i>
                <span><?php echo $social_item["caption"]; ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>