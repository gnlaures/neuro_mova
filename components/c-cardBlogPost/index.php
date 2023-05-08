<?php
?>

<div class="c-cardBlogPost">
    <div class="c-cardBlogPost__figure">
        <!-- picture -->
        <?php $cPhoto = array(
            "modifiers" => "",
            "figcaption" => "",
            "image" => $cCardBlogPost["image"],
            "image_alt" => $cCardBlogPost["image_alt"],
            "image_ratio" => "--ratio-disabled",
            "a_href" => $cCardBlogPost["link"],
            "a_target" => "_self",
            "fancybox" => false,
            "fancybox__name" => "",
        );
        include('components/c-photo/index.php'); ?>
        <!-- tags -->
        <ul class="c-cardBlogPost__categories">
            <?php foreach ($cCardBlogPost["categories"] as $item) {echo '<li><a href="' . $item["link"] . '" class="c-btn --white --s" title="' . $item["caption"] . '"><div class="c-btn__hero"><div class="c-btn__caption">'. $item["caption"] .'</div></div></a></li>';} ?>
        </ul>
    </div>
    <!-- resume -->
    <a href="<?php echo $cCardBlogPost["link"] ?>" class="c-cardBlogPost__infos">
        <span class="date"><?php echo $cCardBlogPost["date"] ?></span>
        <h3><?php echo $cCardBlogPost["title"] ?></h3>
        <p><?php echo $cCardBlogPost["description"] ?></p>
    </a>
    <div class="c-cardBlogPost__readmore">
        <?php $cReadmore = array(
            "modifiers" => "",
            "href" =>  $cCardBlogPost["link"],
            "title" =>  $cCardBlogPost["title"],
            "svg_icon_path" => "media/icons/icon_caretDouble.svg",
            "caption" => "Continuar Lendo",
        );
        include('components/c-readmore/index.php'); ?>
    </div>
</div>