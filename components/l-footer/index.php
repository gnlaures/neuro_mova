<footer class="l-footer">
    <div class="u-container">
        <div class="l-footer__spacer"></div>
        <div class="l-footer__menu">
            <?php $cSiteMap = array('modifiers' => '');
            include('components/c-sitemap/index.php'); ?>
        </div>
        <div class="l-footer__spacer"></div>
        <div class="l-footer__contact">
            <div class="l-footer__brand">
                <?php $cBrand = array(
                    "modifiers" => "",
                    "style" => "light",
                    "href" => "home",
                );
                include('components/c-brand/index.php'); ?>
            </div>
            <div class="l-footer__social">
                <?php
                $cSocialList = array(
                    "modifiers" => "--withCaptions --whiteCaptions --horizontal",
                    "social_items" => array(
                        array("theme" => "--instagram", "caption" => "@gnlaureano", "title" => "Instagram", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
                        array("theme" => "--facebook", "caption" => "/movaortopedicos", "title" => "Facebook", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.facebook.com"),
                        array("theme" => "--primary", "caption" => "vendas@movaoficial.com.br", "title" => "E-mail", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com"),
                        array("theme" => "--wpp", "caption" => "+55 48 8452-8384", "title" => "Whatsapp", "icon" => "media/icons/icon_attach.svg", "link" => "https://www.instagram.com")
                    )
                );
                include('components/c-socialList/index.php'); ?>
            </div>
        </div>
        <div class="l-footer__spacer"></div>
        <div class="l-footer__copyright">
            <?php include('components/c-copyright/index.php'); ?>
            <?php include('components/c-devSignature/index.php'); ?>
        </div>
    </div>
</footer>