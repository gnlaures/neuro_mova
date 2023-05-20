<header class="l-headerProduct">
    <div class="l-headerProduct__hero">
        <div class="l-headerProduct__effect"></div>
        <div class="l-headerProduct__bg">
            <div class="l-headerProduct__bg__gradientMask"></div>
            <img class="l-headerProduct__bg__img" src="media/img/lHeaderHome_1.jpg">
        </div>
        <div class="l-headerProduct__content">
            <div class="u-container">
                <div class="c-defaultContentStyle">
                    <h6>Troncos e Ombros</h6>
                    <h1>Faixa Abdominal Elástica Bege</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nobis non quae rem similique tempore. Aliquam aut commodi consectetur dipisci, impedit e tur adipisicing elit. Eius, nobis non quae rem similique tempore. Aliquam aut commodi consectetur dipisci, impedit, voluptatum.</p>
                </div>
                <?php $cPhoto = array(
                    "modifiers" => "",
                    "figcaption" => "",
                    "image" => "media/img/product_aside_up.png",
                    "image_alt" => "Foto gerada automaticamente, pode ser uma cidade, um animal, uma pessoa ou algo abstrato",
                    "image_ratio" => "--ratio-disabled",
                    "a_href" => "https://picsum.photos/536/354",
                    "a_target" => "_self",
                    "fancybox" => false,
                    "fancybox__name" => "",
                );
                include('components/c-photo/index.php'); ?>
            </div>
        </div>
        <div class="l-headerProduct__scroll">
            <div class="u-container">
                <?php
                $cScrollLink = array(
                    "modifiers" => "--movaOrto",
                    "caption" => "scroll down",
                    "title" => "Confira os detalhes do produto",
                    "href" => "#product",
                );
                include('components/c-scrollLink/index.php'); ?>
            </div>
        </div>
    </div>

    <div class="l-headerProduct__breadcrumb">
        <div class="u-container">
            <?php
            $cBreadcrumb = array(
                array("caption" => "Home", "link" => "home"),
                array("caption" => "Produtos", "link" => "products"),
            );
            include('components/c-breadcrumb/index.php'); ?>
        </div>
    </div>
</header>

