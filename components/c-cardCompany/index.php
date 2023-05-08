<div class="c-cardCompany">

    <?php $cBrand = array(
        "modifiers" => "",
        "style" => "",
        "href" => "#",
    );
    include('components/c-brand/index.php'); ?>

    <?php $cSocialList = array(
        "modifiers" => "",
        "social_items" => array(
            array("theme" => "--instagram", "caption" => "@gnlaureano", "title" => "Instagram", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--facebook", "caption" => "@gnlaureano", "title" => "Facebook", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.facebook.com"),
            array("theme" => "--twitter", "caption" => "@gnlaureano", "title" => "Twitter", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--linkedin", "caption" => "@gnlaureano", "title" => "Linkedin", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com")
        )
    );
    include('components/c-socialList/index.php'); ?>

    <div class="c-defaultContentStyle">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem culpa cumque dolores doloribus ducimus eaque, eius ipsam maxime nobis porro possimus provident soluta suscipit voluptas. Eveniet fuga libero molestiae.</p>
    </div>

    <?php $cReadmore = array(
        "modifiers" => "",
        "href" => "#",
        "title" => "Saiba mais",
        "svg_icon_path" => "media/icons/icon_caretDouble.svg",
        "caption" => "Saiba mais",
    );
    include('components/c-readMore/index.php'); ?>

</div>