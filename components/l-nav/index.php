<nav class="l-nav">
    <div class="l-nav__effect"></div>
    <div class="l-nav__main">
        <div class="l-nav__brand">
            <?php
            $cBrand = array("modifiers" => "", "style" => "dark", "href" => "home");
            include('components/c-brand/index.php');
            ?>
        </div>
        <ul class="l-nav__menu">
            <li><a href="home">Home</a></li>
            <li><a href="products">Produtos</a></li>
            <li><a href="about">Sobre</a></li>
            <li><a href="contact">Contato</a></li>
            <li><a href="carrers">Carreiras</a></li>
            <li>
                <?php $cBtn = array(
                    "modifiers" => "--primary --l",
                    "caption" => "Lojista Compre Aqui",
                    "icon" => "media/icons/icon_cart.svg",
                    "tag" => "a",
                    "href" => "products",
                    "a_title" => "Lojista Compre Aqui");
                include('components/c-btn/index.php'); ?>
            </li>
        </ul>
        <div class="l-nav__hamburguer">
            <?php include('components/c-hamburguer/index.php'); ?>
        </div>
    </div>
</nav>

<div class="l-navMobile">
    <div class="l-navMobile__mask"></div>
    <div class="l-navMobile__content --right">
        <div class="l-navMobile__content__hero">
            <?php include('components/c-hamburguer/index.php'); ?>
            <?php include('components/c-sitemap/index.php');?>
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
        </div>
    </div>
</div>