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
                    "icon" => "media/icons/icon_attach.svg",
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

<div class="l-navMobile u-dnone">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --left">
        <div class="l-navMobile__content__hero">
            <div class="l-navMobile__widget --sitemap">
                <?php include('components/c-sitemap/index.php');?>
            </div>
        </div>
    </div>
</div>