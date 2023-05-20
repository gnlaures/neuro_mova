<div class="c-cardCompany">

    <?php
    $cSocialList = array(
        "modifiers" => "",
        "social_items" => array(
            array("theme" => "--instagram", "caption" => "@gnlaureano", "title" => "Instagram", "icon" => "media/icons/icon_social_insta.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--facebook", "caption" => "/movaortopedicos", "title" => "Facebook", "icon" => "media/icons/icon_social_facebook.svg", "link" => "https://www.facebook.com"),
            array("theme" => "--primary", "caption" => "vendas@movaoficial.com.br", "title" => "E-mail", "icon" => "media/icons/icon_social_mail.svg", "link" => "https://www.instagram.com"),
            array("theme" => "--wpp", "caption" => "+55 48 8452-8384", "title" => "Whatsapp", "icon" => "media/icons/icon_social_wpp.svg", "link" => "https://www.instagram.com")
        )
    );
    include('components/c-socialList/index.php'); ?>

    <div class="c-defaultContentStyle">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem culpa cumque dolores doloribus ducimus eaque, eius ipsam maxime nobis porro possimus provident soluta suscipit voluptas. Eveniet fuga libero molestiae.</p>
        <br>
    </div>

    <?php $cReadmore = array(
        "modifiers" => "",
        "href" => "about",
        "title" => "Saiba mais",
        "svg_icon_path" => "media/icons/icon_caretDouble.svg",
        "caption" => "Saiba mais",
    );
    include('components/c-readMore/index.php'); ?>

</div>